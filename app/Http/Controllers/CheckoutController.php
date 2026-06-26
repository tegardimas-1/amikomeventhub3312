<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function __construct()
    {
        // Konfigurasi kredensial Midtrans sekali di constructor,
        // dipakai bersama oleh store(), payment(), dan success().
        \Midtrans\Config::$serverKey    = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized  = true;
        \Midtrans\Config::$is3ds        = true;
    }

    public function create(Event $event)
    {
        $categories = Category::all();
        return view('checkout.create', compact('event', 'categories'));
    }

    public function store(Request $request, Event $event)
    {
        // 1. Validasi Input
        $request->validate([
            'customer_name'  => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
        ]);

        // 2. Cegah Checkout Jika Tiket Habis
        if ($event->stock <= 0) {
            return back()->with('error', 'Mohon maaf, tiket untuk acara ini sudah habis.');
        }

        // 3. Generate Order ID Unik
        $orderId    = 'TRX-' . time() . '-' . Str::random(5);
        $totalPrice = $event->price + 5000; // Biaya admin dummy

        // 4. Simpan Transaksi ke Database
        $transaction = Transaction::create([
            'event_id'       => $event->id,
            'order_id'       => $orderId,
            'customer_name'  => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'total_price'    => $totalPrice,
            'status'         => 'pending',
        ]);

        // --- INTEGRASI SNAP MIDTRANS ---
        $params = [
            'transaction_details' => [
                'order_id'     => $orderId,
                'gross_amount' => $totalPrice,
            ],
            'customer_details' => [
                'first_name' => $request->customer_name,
                'email'      => $request->customer_email,
                'phone'      => $request->customer_phone,
            ],
        ];

        try {
            // Minta Snap Token ke Midtrans
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            // Simpan token ke transaksi
            $transaction->update(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            // Rollback: transaksi gagal dapat token, jangan kurangi stock,
            // dan jangan biarkan transaksi pending tanpa token menggantung.
            $transaction->delete();

            return back()->with('error', 'Gagal memproses pembayaran: ' . $e->getMessage());
        }

        // 5. Kurangi stock event (hanya setelah Snap Token berhasil dibuat)
        $event->decrement('stock');

        // 6. Redirect ke halaman pembayaran Snap
        return redirect()->route('checkout.payment', $transaction->order_id);
    }

    public function payment($order_id)
    {
        $categories  = Category::all();
        $transaction = Transaction::with('event')->where('order_id', $order_id)->firstOrFail();

        return view('checkout.payment', compact('transaction', 'categories'));
    }

    public function success(Transaction $transaction)
    {
        $transaction->load('event');
        $categories = Category::all();

        // Validasi status pembayaran asli dari Midtrans (mencegah manipulasi URL/akses langsung)
        if ($transaction->status === 'pending') {
            try {
                $midtransStatus = \Midtrans\Transaction::status($transaction->order_id);

                if (in_array($midtransStatus->transaction_status, ['capture', 'settlement'])) {
                    $transaction->update(['status' => 'success']);
                } elseif (in_array($midtransStatus->transaction_status, ['cancel', 'deny', 'expire'])) {
                    $transaction->update(['status' => 'failed']);
                }
            } catch (\Exception $e) {
                // Jika gagal cek status (mis. order belum pernah dibayar / koneksi putus),
                // tetap tampilkan halaman success dengan status apa adanya di DB.
            }
        }

        return view('checkout.success', compact('transaction', 'categories'));
    }
}
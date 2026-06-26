<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    
    /**
     * Tampilkan laporan transaksi
     */
    public function index()
    {
        $transactions = Transaction::with('event')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.transactions.index', compact('transactions'));
    }

    /**
     * API endpoint untuk fetch transaksi real-time (AJAX)
     */
    public function getTransactions(Request $request)
    {
        $transactions = Transaction::with('event')
            ->orderBy('created_at', 'desc')
            ->limit(20)
            ->get();

        return response()->json([
            'data' => $transactions->map(fn($t) => [
                'id' => $t->id,
                'order_id' => $t->order_id,
                'customer_name' => $t->customer_name,
                'customer_email' => $t->customer_email,
                'event_title' => $t->event->title ?? 'N/A',
                'transaction_date' => $t->created_at->format('d M Y, H:i'),
                'status' => $t->status,
                'total_amount' => 'Rp ' . number_format($t->total_price, 0, ',', '.'),
            ])
        ]);
    }

    /**
     * Tampilkan detail transaksi
     */
    public function show($id)
    {
        $transaction = Transaction::with('event')->findOrFail($id);
        return view('admin.transactions.show', compact('transaction'));
    }

    /**
     * Halaman edit transaksi
     */
    public function edit(Transaction $transaction)
    {
        return view('admin.transactions.edit', compact('transaction'));
    }

    /**
     * Update transaksi
     *
     * Catatan: status pembayaran TIDAK bisa diubah manual dari sini.
     * Status hanya berubah otomatis lewat konfirmasi Midtrans
     * (webhook notification atau pengecekan saat redirect ke checkout-success),
     * supaya data pendapatan & tiket terjual di dashboard selalu selaras
     * dengan status pembayaran yang sebenarnya.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'total_price' => 'required|numeric|min:0',
        ]);

        $transaction->update($validated);

        return redirect()->route('admin.transactions.index')
                        ->with('success', 'Transaksi berhasil diperbarui!');
    }

    /**
     * Hapus transaksi
     */
    public function destroy(Transaction $transaction)
    {
        // Kembalikan stock event jika transaksi dihapus
        if ($transaction->event) {
            $transaction->event->increment('stock');
        }

        $transaction->delete();

        return redirect()->route('admin.transactions.index')
                        ->with('success', 'Transaksi berhasil dihapus!');
    }
}
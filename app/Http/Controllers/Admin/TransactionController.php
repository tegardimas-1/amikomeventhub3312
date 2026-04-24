<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Tampilkan laporan transaksi
     */
    public function index()
    {
        // TODO: Ganti dengan query ke database
        $transactions = [
            (object)[
                'id' => 1,
                'order_id' => '#TRX-99210',
                'customer_name' => 'Donni Prabowo',
                'customer_email' => 'donni@example.com',
                'event_title' => 'Jazz Night 2024',
                'transaction_date' => '26 Mar 2024, 17:45',
                'status' => 'success',
                'total_amount' => 'Rp 155.000'
            ],
            (object)[
                'id' => 2,
                'order_id' => '#TRX-99209',
                'customer_name' => 'Maya Sari',
                'customer_email' => 'maya@example.com',
                'event_title' => 'AI & Future Workshop',
                'transaction_date' => '26 Mar 2024, 15:20',
                'status' => 'pending',
                'total_amount' => 'Rp 55.000'
            ],
            (object)[
                'id' => 3,
                'order_id' => '#TRX-99208',
                'customer_name' => 'Budi Santoso',
                'customer_email' => 'budi@example.com',
                'event_title' => 'Hackathon 2024',
                'transaction_date' => '25 Mar 2024, 10:00',
                'status' => 'success',
                'total_amount' => 'Rp 0'
            ],
        ];

        return view('admin.transactions.index', compact('transactions'));
    }

    /**
     * Tampilkan detail transaksi
     */
    public function show($id)
    {
        // TODO: Implementasi show
    }
}


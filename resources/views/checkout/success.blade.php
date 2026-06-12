@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-600 to-indigo-900 flex items-center justify-center p-4">
    <div class="max-w-2xl w-full bg-white rounded-3xl shadow-2xl p-8">
        
        <!-- Success Icon -->
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h1 class="text-4xl font-black text-slate-900 mb-2">Pesanan Berhasil!</h1>
            <p class="text-slate-500 text-lg">Terima kasih telah memesan tiket</p>
        </div>

        <!-- Order Details -->
        <div class="bg-slate-50 rounded-2xl p-6 mb-8 space-y-4">
            <div class="flex justify-between items-center pb-4 border-b">
                <span class="text-slate-600 font-semibold">Order ID:</span>
                <span class="text-indigo-600 font-bold text-lg">{{ $transaction->order_id }}</span>
            </div>

            <div class="flex justify-between items-center pb-4 border-b">
                <span class="text-slate-600 font-semibold">Status Pembayaran:</span>
                <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full font-bold text-sm">
                    @if($transaction->status === 'pending')
                        ⏳ Menunggu Pembayaran
                    @elseif($transaction->status === 'paid')
                        ✓ Lunas
                    @elseif($transaction->status === 'cancelled')
                        ✗ Dibatalkan
                    @else
                        {{ strtoupper($transaction->status) }}
                    @endif
                </span>
            </div>

            <div class="flex justify-between items-center pb-4 border-b">
                <span class="text-slate-600 font-semibold">Event:</span>
                <span class="font-bold text-slate-900">{{ $transaction->event->title }}</span>
            </div>

            <div class="flex justify-between items-center pb-4 border-b">
                <span class="text-slate-600 font-semibold">Tanggal Event:</span>
                <span class="font-semibold text-slate-900">{{ $transaction->event->date->format('d M Y • H:i') }}</span>
            </div>

            <div class="flex justify-between items-center pb-4 border-b">
                <span class="text-slate-600 font-semibold">Lokasi:</span>
                <span class="font-semibold text-slate-900">{{ $transaction->event->location }}</span>
            </div>

            <div class="flex justify-between items-center pb-4 border-b">
                <span class="text-slate-600 font-semibold">Nama Pemesan:</span>
                <span class="font-semibold text-slate-900">{{ $transaction->customer_name }}</span>
            </div>

            <div class="flex justify-between items-center pb-4 border-b">
                <span class="text-slate-600 font-semibold">Email:</span>
                <span class="font-semibold text-slate-900">{{ $transaction->customer_email }}</span>
            </div>

            <div class="flex justify-between items-center pb-4 border-b">
                <span class="text-slate-600 font-semibold">No. Telepon:</span>
                <span class="font-semibold text-slate-900">{{ $transaction->customer_phone }}</span>
            </div>

            <div class="flex justify-between items-center pt-4 border-t-2">
                <span class="text-slate-900 font-black text-lg">Total Pembayaran:</span>
                <span class="text-indigo-600 font-black text-2xl">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</span>
            </div>
        </div>

        <!-- Info Box -->
        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-8 rounded">
            <p class="text-blue-900 font-semibold mb-2">ℹ️ Informasi Penting:</p>
            <ul class="text-blue-800 text-sm space-y-1 list-disc list-inside">
                <li>Simpan Order ID Anda untuk referensi</li>
                <li>Email konfirmasi akan dikirim ke {{ $transaction->customer_email }}</li>
                <li>Silakan melakukan pembayaran sesuai dengan instruksi yang akan dikirimkan</li>
                <li>Tiket digital akan dikirim setelah pembayaran dikonfirmasi</li>
            </ul>
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-4">
            <a href="{{ route('home') }}"
                class="flex-1 px-6 py-3 bg-slate-200 text-slate-900 rounded-2xl font-bold hover:bg-slate-300 transition text-center">
                Kembali ke Beranda
            </a>
            <a href="{{ route('ticket') }}?email={{ urlencode($transaction->customer_email) }}"
                class="flex-1 px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition text-center">
                Lihat Tiket Saya
            </a>
        </div>
    </div>
</div>
@endsection

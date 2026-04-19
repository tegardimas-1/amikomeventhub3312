@extends('layouts.app')

@section('title', 'Pembayaran Berhasil - AmikomEventHub')

@section('content')

    <main class="max-w-3xl mx-auto px-6 py-20">
        <div class="text-center mb-12">
            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl font-extrabold text-green-600">Pembayaran Berhasil!</h1>
            <p class="text-slate-500 mt-2 text-lg">Terima kasih telah melakukan pembelian tiket.</p>
        </div>

        <!-- Success Card -->
        <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm mb-8">
            <h3 class="text-xl font-bold mb-6 border-b pb-4">Detail Pesanan</h3>
            
            <div class="space-y-4">
                <div class="flex justify-between items-center py-3 border-b">
                    <span class="text-slate-500 font-medium">No. Pesanan</span>
                    <span class="font-bold text-indigo-600">{{ $order_id }}</span>
                </div>
                <div class="flex justify-between items-center py-3 border-b">
                    <span class="text-slate-500 font-medium">Status Pembayaran</span>
                    <span class="px-4 py-2 bg-green-100 text-green-700 rounded-lg font-bold text-sm">✓ Berhasil</span>
                </div>
                <div class="flex justify-between items-center py-3 border-b">
                    <span class="text-slate-500 font-medium">Email</span>
                    <span class="font-medium">Cek email Anda untuk E-Ticket</span>
                </div>
                <div class="flex justify-between items-center py-3">
                    <span class="text-slate-500 font-medium">Waktu Transaksi</span>
                    <span class="font-medium">{{ now()->format('d M Y H:i') }}</span>
                </div>
            </div>
        </div>

        <!-- Info Card -->
        <div class="bg-blue-50 rounded-3xl border border-blue-200 p-6 mb-8">
            <h4 class="font-bold text-blue-900 mb-3 flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zm-11-1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                </svg>
                Informasi Penting
            </h4>
            <ul class="text-sm text-blue-800 space-y-2">
                <li>✓ E-Ticket telah dikirim ke email Anda</li>
                <li>✓ Simpan E-Ticket untuk keperluan check-in</li>
                <li>✓ Buka email Anda untuk melihat detail lengkap tiket</li>
                <li>✓ Hubungi kami jika ada pertanyaan</li>
            </ul>
        </div>

        <!-- Action Buttons -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="{{ route('home') }}"
                class="py-4 px-6 bg-indigo-600 text-white rounded-2xl font-bold text-center hover:bg-indigo-700 transition">
                Kembali ke Beranda
            </a>
            <a href="{{ route('events.index') }}"
                class="py-4 px-6 border-2 border-indigo-600 text-indigo-600 rounded-2xl font-bold text-center hover:bg-indigo-50 transition">
                Lihat Event Lainnya
            </a>
        </div>
    </main>

@endsection

@extends('layouts.app')

@section('title', 'Tiket Saya - AmikomEventHub')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-indigo-100 py-12 px-4">
    <div class="max-w-4xl mx-auto">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-black text-indigo-900 mb-2">Tiket Saya</h1>
            <p class="text-indigo-600 text-lg">Kelola dan lihat semua tiket Anda di sini</p>
        </div>

        @if($transactions->isEmpty())
            <!-- Empty State -->
            <div class="bg-white rounded-3xl shadow-lg p-12 text-center">
                <div class="w-24 h-24 bg-indigo-50 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-black text-slate-900 mb-2">Belum Ada Tiket</h2>
                <p class="text-slate-500 mb-6">Anda belum memiliki tiket. Mulai pesan tiket untuk acara favorit Anda!</p>
                <a href="{{ route('home') }}" class="inline-block px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">
                    Jelajahi Event
                </a>
            </div>
        @else
            <!-- Tickets List -->
            <div class="space-y-6">
                @foreach($transactions as $transaction)
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <!-- Ticket Card Header -->
                    <div class="p-6 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-indigo-100 text-sm font-bold uppercase mb-1">Order ID</p>
                                <p class="font-mono font-bold text-lg">{{ $transaction->order_id }}</p>
                            </div>
                            @if($transaction->status == 'success')
                                <span class="px-4 py-2 bg-green-500 text-white rounded-full text-xs font-bold uppercase">✓ Lunas</span>
                            @elseif($transaction->status == 'pending')
                                <span class="px-4 py-2 bg-orange-500 text-white rounded-full text-xs font-bold uppercase">⏳ Pending</span>
                            @else
                                <span class="px-4 py-2 bg-red-500 text-white rounded-full text-xs font-bold uppercase">✗ Dibatalkan</span>
                            @endif
                        </div>
                        <h3 class="text-2xl font-black">{{ $transaction->event->title }}</h3>
                    </div>

                    <!-- Ticket Details -->
                    <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Left Column -->
                        <div class="space-y-6">
                            <div>
                                <p class="text-slate-400 text-xs font-bold uppercase mb-1">Nama Pembeli</p>
                                <p class="font-bold text-lg text-slate-900">{{ $transaction->customer_name }}</p>
                            </div>
                            <div>
                                <p class="text-slate-400 text-xs font-bold uppercase mb-1">Email</p>
                                <p class="font-semibold text-slate-600">{{ $transaction->customer_email }}</p>
                            </div>
                            <div>
                                <p class="text-slate-400 text-xs font-bold uppercase mb-1">Telepon</p>
                                <p class="font-semibold text-slate-600">{{ $transaction->customer_phone }}</p>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-6 border-l-2 border-slate-200 pl-8">
                            <div>
                                <p class="text-slate-400 text-xs font-bold uppercase mb-1">Tanggal & Waktu Event</p>
                                <p class="font-bold text-lg text-slate-900">
                                    {{ $transaction->event->date->format('d M Y • H:i') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-slate-400 text-xs font-bold uppercase mb-1">Lokasi</p>
                                <p class="font-semibold text-slate-600">{{ $transaction->event->location }}</p>
                            </div>
                            <div>
                                <p class="text-slate-400 text-xs font-bold uppercase mb-1">Tanggal Pemesanan</p>
                                <p class="font-semibold text-slate-600">{{ $transaction->created_at->format('d M Y • H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Price Section -->
                    <div class="px-8 py-6 bg-slate-50 border-t flex justify-between items-center">
                        <span class="text-slate-600 font-bold">Total Pembayaran:</span>
                        <span class="text-3xl font-black text-indigo-600">
                            Rp {{ number_format($transaction->total_price, 0, ',', '.') }}
                        </span>
                    </div>

                    <!-- Download Button -->
                    <div class="px-8 py-4 flex gap-4">
                        <button onclick="alert('Fitur download tiket akan segera tersedia')"
                            class="flex-1 px-6 py-3 bg-indigo-100 text-indigo-600 rounded-2xl font-bold hover:bg-indigo-200 transition">
                            📥 Download Tiket
                        </button>
                        <button onclick="alert('Fitur share tiket akan segera tersedia')"
                            class="flex-1 px-6 py-3 bg-slate-100 text-slate-600 rounded-2xl font-bold hover:bg-slate-200 transition">
                            📤 Share Tiket
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Back Button -->
            <div class="text-center mt-12">
                <a href="{{ route('home') }}" class="text-indigo-600 font-bold hover:underline">
                    ← Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'AmikomEventHub - Temukan Event Seru!')

@section('content')

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
        <div class="flex-1 space-y-8">
            <span
                class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider">#1
                Event Platform</span>
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                Temukan & Pesan <span class="text-indigo-600">Tiket Event</span> Impianmu.
            </h1>
            <p class="text-lg text-slate-500 max-w-lg leading-relaxed">
                Dari konser musik hingga workshop teknologi, semua ada di genggamanmu. Pesan aman & cepat dengan
                Midtrans.
            </p>
            <div class="flex gap-4">
                <a href="#events"
                    class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-xl shadow-indigo-200 hover:scale-105 transition-transform">
                    Mulai Jelajah
                </a>
                <a href="#"
                    class="px-8 py-4 border-2 border-slate-200 rounded-2xl font-bold text-lg hover:border-indigo-600 hover:text-indigo-600 transition">
                    Cara Pesan
                </a>
            </div>
        </div>
        <div class="flex-1 relative">
            <div
                class="absolute -top-10 -left-10 w-64 h-64 bg-indigo-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute -bottom-10 -right-10 w-64 h-64 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
            </div>
            <img src="{{ asset('assets/concert.png') }}" alt="Concert"
                class="rounded-[2rem] shadow-2xl relative z-10 w-full object-cover aspect-[4/5] object-center">

            <div class="absolute -bottom-6 -left-6 glass p-6 rounded-2xl shadow-xl z-20 border border-white">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-bold uppercase">Terverifikasi</p>
                        <p class="font-bold">Pembayaran Aman via Midtrans</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section — sisipkan setelah Hero Section -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">

            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold mb-1">Event Terkontol</h2>
                    <p class="text-slate-500">Jangan sampai ketinggalan acara seru minggu ini!</p>
                </div>
                <a href="/katalog"
                    class="px-4 py-2 border border-slate-200 rounded-lg text-sm font-medium text-slate-700 hover:bg-white hover:shadow transition">
                    Semua Kategori
                </a>
            </div>

            @if(isset($events) && count($events) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($events as $event)
                                <div
                                    class="bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group">

                                    {{-- Poster --}}
                                    <div class="relative aspect-[3/4] overflow-hidden">

                                        <img src="{{ ($event->poster_path && Storage::disk('public')->exists($event->poster_path))
                                ? asset('storage/' . $event->poster_path)
                                : 'https://placehold.co/200x600' }}" alt="{{ $event->title }}"
                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                                        @if($event->category)
                                            <div
                                                class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                                                {{ $event->category->name }}
                                            </div>
                                        @endif

                                    </div>

                                    {{-- Badge kategori --}}
                                    @if($event->category)
                                        <div
                                            class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                                            {{ $event->category->name }}
                                        </div>
                                    @endif
                                </div>

                                {{-- Info event --}}
                                <div class="p-5">
                                    <h3 class="text-lg font-bold mb-2 group-hover:text-indigo-600 transition line-clamp-2">
                                        {{ $event->title }}
                                    </h3>

                                    <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ \Carbon\Carbon::parse($event->date)->format('d M Y, H:i') }}</span>
                                    </div>

                                    <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                                        <span class="text-xl font-black text-indigo-600">
                                            @if(!$event->price || $event->price == 0)
                                                Gratis
                                            @else
                                                Rp {{ number_format($event->price, 0, ',', '.') }}
                                            @endif
                                        </span>
                                        <a href="{{ route('events.show', $event->id) }}"
                                            class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-sm font-bold hover:bg-indigo-600 hover:text-white transition">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                </div>

            @else
            <div class="text-center py-16">
                <p class="text-slate-500 mb-4">Belum ada event yang tersedia saat ini.</p>
                <a href="/katalog" class="text-indigo-600 font-bold hover:underline">Lihat semua event →</a>
            </div>
        @endif

        </div>
    </section>

@endsection
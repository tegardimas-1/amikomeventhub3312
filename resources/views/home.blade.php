@extends('layouts.app')

@section('title', 'AmikomEventHub - Temukan Event Seru!')

@section('content')

<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1 space-y-8">
        <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider">#1 Event Platform</span>
        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
            Temukan & Pesan <span class="text-indigo-600">Tiket Event</span> Impianmu.
        </h1>
        <p class="text-lg text-slate-500 max-w-lg leading-relaxed">
            Dari konser musik hingga workshop teknologi, semua ada di genggamanmu. Pesan aman & cepat dengan Midtrans.
        </p>
        <div class="flex gap-4">
            <a href="#events" class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-xl shadow-indigo-200 hover:scale-105 transition-transform">
                Mulai Jelajah
            </a>
            <a href="#" class="px-8 py-4 border-2 border-slate-200 rounded-2xl font-bold text-lg hover:border-indigo-600 hover:text-indigo-600 transition">
                Cara Pesan
            </a>
        </div>
    </div>
    <div class="flex-1 relative">
        <img src="{{ asset('assets/concert.png') }}" alt="Concert"
            class="rounded-[2rem] shadow-2xl relative z-10 w-full object-cover aspect-[4/5] object-center">
        <div class="absolute -bottom-6 -left-6 glass p-6 rounded-2xl shadow-xl z-20 border border-white">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
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

<!-- Kategori Section -->
<section class="max-w-7xl mx-auto px-6 py-12">
    <div class="mb-8">
        <h2 class="text-2xl font-extrabold mb-1">Jelajahi Kategori</h2>
        <p class="text-slate-500">Temukan event sesuai minatmu</p>
    </div>

    @if(isset($categories) && count($categories) > 0)
    <div class="flex flex-wrap gap-3">
        <a href="{{ route('home') }}"
           class="px-5 py-2.5 {{ !request('kategori') ? 'bg-indigo-600 text-white' : 'bg-white border border-slate-200 text-slate-700 hover:border-indigo-600 hover:text-indigo-600' }} rounded-xl font-bold text-sm transition">
            Semua
        </a>
        @foreach($categories as $category)
        <a href="{{ route('home', ['kategori' => $category->id]) }}"
           class="px-5 py-2.5 {{ request('kategori') == $category->id ? 'bg-indigo-600 text-white' : 'bg-white border border-slate-200 text-slate-700 hover:border-indigo-600 hover:text-indigo-600' }} rounded-xl font-bold text-sm transition">
            {{ $category->name }}
        </a>
        @endforeach
    </div>
    @endif
</section>

<!-- Events Section -->
<section id="events" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-3xl font-extrabold mb-1">Event Terdekat</h2>
                <p class="text-slate-500">Jangan sampai ketinggalan acara seru minggu ini!</p>
            </div>
            <a href="{{ route('home') }}"
               class="px-4 py-2 border border-slate-200 rounded-xl text-sm font-bold text-slate-700 hover:bg-white hover:shadow transition">
                Semua Event →
            </a>
        </div>

        @if(isset($events) && count($events) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($events as $event)
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">

                <div class="relative aspect-[3/4] overflow-hidden">
                    @if($event->poster_path)
                        <img src="{{ asset('storage/' . $event->poster_path) }}"
                             alt="{{ $event->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-indigo-400 to-purple-600 flex items-center justify-center">
                            <svg class="w-20 h-20 text-white opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    @endif

                    @if($event->category)
                    <div class="absolute top-3 left-3 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                        {{ $event->category->name }}
                    </div>
                    @endif
                </div>

                <div class="p-5">
                    <h3 class="text-lg font-bold mb-2 group-hover:text-indigo-600 transition line-clamp-2">
                        {{ $event->title }}
                    </h3>
                    <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
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
            <a href="{{ route('home') }}" class="text-indigo-600 font-bold hover:underline">Lihat semua event →</a>
        </div>
        @endif

    </div>
</section>

<!-- Partners Section -->
<section class="max-w-7xl mx-auto px-6 py-20 border-t">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-extrabold mb-2">Mitra Kami</h2>
        <p class="text-slate-500 font-medium">Dipercaya oleh berbagai organisasi terkemuka</p>
    </div>

    @if(isset($partners) && count($partners) > 0)
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($partners as $partner)
        <div class="flex items-center justify-center p-6 bg-white rounded-2xl border border-slate-100 hover:shadow-lg transition">
            @if($partner->logo_url)
                <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}" class="h-20 w-auto object-contain">
            @else
                <p class="font-bold text-slate-700 text-sm text-center">{{ $partner->name }}</p>
            @endif
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-12">
        <p class="text-slate-500">Belum ada mitra yang terdaftar.</p>
        <a href="/admin/partners" class="text-indigo-600 font-bold hover:underline text-sm mt-2 inline-block">
            Tambah mitra via admin →
        </a>
    </div>
    @endif
</section>

@endsection
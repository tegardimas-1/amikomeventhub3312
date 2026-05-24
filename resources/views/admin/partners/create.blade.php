@extends('layouts.admin')
@section('title', 'Tambah Partner - Admin Panel')
@section('page-title', 'Tambah Partner Baru')
@section('page-subtitle', 'Tambahkan mitra baru yang mendukung platform.')

@section('content')
    <div class="max-w-2xl">
        <!-- Back Button -->
        <a href="{{ route('admin.partners.index') }}" class="inline-flex items-center gap-2 text-indigo-600 font-bold mb-6 hover:text-indigo-700">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Daftar
        </a>

        <!-- Form Card -->
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8">
            <h2 class="text-2xl font-black mb-8">Informasi Partner</h2>

            <form action="{{ route('admin.partners.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Nama Partner -->
                <div>
                    <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Partner</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" 
                        class="w-full px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition @error('name') border-red-500 @enderror" 
                        placeholder="Contoh: PT. Amikom Indonesia, BNI, dll">
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Logo URL -->
                <div>
                    <label for="logo_url" class="block text-sm font-bold text-slate-700 mb-2">URL Logo (Opsional)</label>
                    <input type="text" id="logo_url" name="logo_url" value="{{ old('logo_url') }}" 
                        class="w-full px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition @error('logo_url') border-red-500 @enderror" 
                        placeholder="https://example.com/logo.png">
                    @error('logo_url')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-6">
                    <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">
                        Simpan Partner
                    </button>
                    <a href="{{ route('admin.partners.index') }}" class="px-8 py-3 border border-slate-300 rounded-xl font-bold hover:bg-slate-50 transition">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

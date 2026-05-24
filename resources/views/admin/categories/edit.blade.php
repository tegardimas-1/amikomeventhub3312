@extends('layouts.admin')
@section('title', 'Edit Kategori - Admin Panel')
@section('page-title', 'Edit Kategori')
@section('page-subtitle', 'Ubah informasi kategori event.')

@section('content')
    <div class="max-w-2xl">
        <!-- Back Button -->
        <a href="{{ route('admin.categories.index') }}" class="inline-flex items-center gap-2 text-indigo-600 font-bold mb-6 hover:text-indigo-700">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Daftar
        </a>

        <!-- Form Card -->
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8">
            <h2 class="text-2xl font-black mb-8">Edit Kategori: {{ $category->name }}</h2>

            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Nama Kategori -->
                <div>
                    <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Kategori</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" 
                        class="w-full px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition @error('name') border-red-500 @enderror" 
                        placeholder="Contoh: Musik, Teknologi, Workshop">
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="description" class="block text-sm font-bold text-slate-700 mb-2">Deskripsi (Opsional)</label>
                    <textarea id="description" name="description" rows="5" 
                        class="w-full px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition @error('description') border-red-500 @enderror" 
                        placeholder="Jelaskan jenis kategori ini...">{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-6">
                    <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">
                        Simpan Perubahan
                    </button>
                    <a href="{{ route('admin.categories.index') }}" class="px-8 py-3 border border-slate-300 rounded-xl font-bold hover:bg-slate-50 transition">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

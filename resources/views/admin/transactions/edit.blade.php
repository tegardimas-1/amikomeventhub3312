@extends('layouts.admin')
@section('title', 'Edit Transaksi - Admin Panel')
@section('page-title', 'Edit Transaksi')
@section('page-subtitle', 'Perbarui informasi transaksi')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8">
        
        <form action="{{ route('admin.transactions.update', $transaction->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Order ID (Read-only) -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Order ID</label>
                <input type="text" value="{{ $transaction->order_id }}" disabled
                    class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" readonly>
            </div>

            <!-- Event -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Event</label>
                <input type="text" value="{{ $transaction->event->title }}" disabled
                    class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" readonly>
            </div>

            <!-- Nama Pelanggan -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Pelanggan</label>
                <input type="text" name="customer_name" value="{{ old('customer_name', $transaction->customer_name) }}" required
                    class="w-full px-5 py-4 bg-white border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium
                    @error('customer_name') border-red-500 @enderror">
                @error('customer_name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Email</label>
                <input type="email" name="customer_email" value="{{ old('customer_email', $transaction->customer_email) }}" required
                    class="w-full px-5 py-4 bg-white border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium
                    @error('customer_email') border-red-500 @enderror">
                @error('customer_email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Telepon -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nomor Telepon</label>
                <input type="tel" name="customer_phone" value="{{ old('customer_phone', $transaction->customer_phone) }}" required
                    class="w-full px-5 py-4 bg-white border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium
                    @error('customer_phone') border-red-500 @enderror">
                @error('customer_phone')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Total Harga -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Total Harga (Rp)</label>
                <input type="number" name="total_price" value="{{ old('total_price', $transaction->total_price) }}" required step="100" min="0"
                    class="w-full px-5 py-4 bg-white border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium
                    @error('total_price') border-red-500 @enderror">
                @error('total_price')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Status Pembayaran</label>
                <select name="status" required
                    class="w-full px-5 py-4 bg-white border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium
                    @error('status') border-red-500 @enderror">
                    <option value="pending" {{ old('status', $transaction->status) == 'pending' ? 'selected' : '' }}>Menunggu Pembayaran</option>
                    <option value="paid" {{ old('status', $transaction->status) == 'paid' ? 'selected' : '' }}>Lunas</option>
                    <option value="cancelled" {{ old('status', $transaction->status) == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                </select>
                @error('status')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-4 pt-6 border-t">
                <a href="{{ route('admin.transactions.index') }}"
                    class="flex-1 px-6 py-4 bg-slate-200 text-slate-900 rounded-2xl font-bold hover:bg-slate-300 transition text-center">
                    Batal
                </a>
                <button type="submit"
                    class="flex-1 px-6 py-4 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

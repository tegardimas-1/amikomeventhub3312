@extends('layouts.admin')
@section('title', 'Kelola Partner - Admin Panel')
@section('page-title', 'Kelola Partner')
@section('page-subtitle', 'Atur daftar mitra yang mendukung platform AmikomEventHub.')

@section('content')
        <!-- Flash Message -->
        @if(session('success'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 font-medium">
            {{ session('success') }}
        </div>
        @endif

        <!-- Header Action -->
        <div class="mb-10 flex justify-between items-center">
            <div></div>
            <a href="{{ route('admin.partners.create') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition flex items-center gap-2 inline-flex">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah Partner
            </a>
        </div>

        <!-- Partners Table -->
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="px-8 py-6 bg-slate-50/50 border-b">
                <form method="GET" action="{{ route('admin.partners.index') }}">
                    <input type="text" name="search" placeholder="Cari nama partner..." value="{{ request('search') }}"
                        class="w-full px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition uppercase text-sm font-medium tracking-wide">
                </form>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <tr>
                            <th class="px-8 py-4 w-16">No</th>
                            <th class="px-8 py-4">Nama Partner</th>
                            <th class="px-8 py-4">Logo</th>
                            <th class="px-8 py-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-t">
                        <!-- Data Partner -->
                        @forelse($partners ?? [] as $index => $partner)
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">{{ ($partners->currentPage() - 1) * 10 + $loop->iteration }}</td>
                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">{{ $partner->name ?? '-' }}</p>
                            </td>
                            <td class="px-8 py-6">
                                @if($partner->logo_url)
                                    <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}" class="h-12 w-auto">
                                @else
                                    <span class="text-slate-400 text-sm">-</span>
                                @endif
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex gap-2">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.partners.edit', $partner->id) }}"
                                        class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition inline-block" title="Edit Partner">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </a>
                                    
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus partner ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition" title="Hapus Partner">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-8 py-12 text-center text-slate-500">
                                <p class="font-medium">Belum ada partner. <a href="{{ route('admin.partners.create') }}" class="text-indigo-600 hover:underline">Tambah partner baru</a></p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-8 py-6 bg-slate-50/50 border-t">
                {{ $partners->links() }}
            </div>
        </div>
    @endsection

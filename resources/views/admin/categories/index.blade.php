@extends('layouts.admin')
@section('title', 'Kelola Kategori - Admin Panel')
@section('page-title', 'Kelola Kategori')
@section('page-subtitle', 'Atur daftar kategori event untuk meningkatkan organisasi.')

@section('content')
        <!-- Header Action -->
        <div class="mb-10 flex justify-between items-center">
            <div></div>
            <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah Kategori
            </button>
        </div>

        <!-- Categories Table -->
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="px-8 py-6 bg-slate-50/50 border-b">
                <input type="text" placeholder="Cari nama kategori..."
                    class="w-full px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition uppercase text-sm font-medium tracking-wide">
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <tr>
                            <th class="px-8 py-4 w-16">No</th>
                            <th class="px-8 py-4">Nama Kategori</th>
                            <th class="px-8 py-4">Deskripsi</th>
                            <th class="px-8 py-4">Jumlah Event</th>
                            <th class="px-8 py-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-t">
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">1</td>
                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">Musik</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm text-slate-600">Acara musik dan konser</p>
                            </td>
                            <td class="px-8 py-6">
                                <span class="inline-block px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg font-bold text-sm">5 Event</span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex gap-2">
                                    <button
                                        class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition" title="Edit Kategori">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button
                                        class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition" title="Hapus Kategori">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">2</td>
                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">Teknologi</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm text-slate-600">Workshop dan seminar teknologi</p>
                            </td>
                            <td class="px-8 py-6">
                                <span class="inline-block px-4 py-2 bg-green-50 text-green-600 rounded-lg font-bold text-sm">8 Event</span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex gap-2">
                                    <button
                                        class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition" title="Edit Kategori">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button
                                        class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition" title="Hapus Kategori">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">3</td>
                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">Seminar</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm text-slate-600">Acara seminar dan diskusi</p>
                            </td>
                            <td class="px-8 py-6">
                                <span class="inline-block px-4 py-2 bg-orange-50 text-orange-600 rounded-lg font-bold text-sm">12 Event</span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex gap-2">
                                    <button
                                        class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition" title="Edit Kategori">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button
                                        class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition" title="Hapus Kategori">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-8 py-6 font-bold text-slate-400">4</td>
                            <td class="px-8 py-6">
                                <p class="font-black text-slate-800">Workshop</p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="text-sm text-slate-600">Acara workshop dan pelatihan</p>
                            </td>
                            <td class="px-8 py-6">
                                <span class="inline-block px-4 py-2 bg-purple-50 text-purple-600 rounded-lg font-bold text-sm">15 Event</span>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex gap-2">
                                    <button
                                        class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition" title="Edit Kategori">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button
                                        class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition" title="Hapus Kategori">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-8 py-6 bg-slate-50/50 border-t flex justify-between items-center">
                <p class="text-sm text-slate-500 font-medium">Menampilkan 4 dari 4 kategori</p>
                <div class="flex gap-2">
                    <button
                        class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold opacity-50 cursor-not-allowed">Sebelumnya</button>
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-xl shadow-md text-sm font-bold">1</button>
                    <button
                        class="px-4 py-2 border rounded-xl hover:bg-white transition text-sm font-bold opacity-50 cursor-not-allowed">Berikutnya</button>
                </div>
            </div>
        </div>
    @endsection

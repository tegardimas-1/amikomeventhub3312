<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Tampilkan daftar kategori
     */
    public function index()
    {
        // TODO: Ganti dengan query ke database
        $categories = [
            (object)[
                'id' => 1,
                'name' => 'Musik',
                'description' => 'Acara musik dan konser',
                'events_count' => 5
            ],
            (object)[
                'id' => 2,
                'name' => 'Teknologi',
                'description' => 'Workshop dan seminar teknologi',
                'events_count' => 8
            ],
            (object)[
                'id' => 3,
                'name' => 'Seminar',
                'description' => 'Acara seminar dan diskusi',
                'events_count' => 12
            ],
            (object)[
                'id' => 4,
                'name' => 'Workshop',
                'description' => 'Acara workshop dan pelatihan',
                'events_count' => 15
            ],
        ];

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Tampilkan form create kategori
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Simpan kategori baru
     */
    public function store(Request $request)
    {
        // TODO: Implementasi store
    }

    /**
     * Tampilkan form edit kategori
     */
    public function edit($id)
    {
        return view('admin.categories.edit');
    }

    /**
     * Update kategori
     */
    public function update(Request $request, $id)
    {
        // TODO: Implementasi update
    }

    /**
     * Hapus kategori
     */
    public function destroy($id)
    {
        // TODO: Implementasi destroy
    }
}


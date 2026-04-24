<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    ////
    /**
     * Tampilkan daftar event
     */
    public function index()
    {
        // TODO: Ganti dengan query ke database
        $events = [
            (object)[
                'id' => 1,
                'title' => 'Jazz Night 2024',
                'category' => 'Musik',
                'date' => '16 Nov 2024',
                'price' => 'Rp 150.000',
                'stock' => 100,
                'sold' => 42
            ],
            (object)[
                'id' => 2,
                'title' => 'AI & Future Workshop',
                'category' => 'Tech',
                'date' => '26 Oct 2024',
                'price' => 'Rp 50.000',
                'stock' => 50,
                'sold' => 12
            ],
        ];

        return view('admin.events.index', compact('events'));
    }

    /**
     * Tampilkan form create event
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Simpan event baru
     */
    public function store(Request $request)
    {
        // TODO: Implementasi store
    }

    /**
     * Tampilkan form edit event
     */
    public function edit($id)
    {
        return view('admin.events.edit');
    }

    /**
     * Update event
     */
    public function update(Request $request, $id)
    {
        // TODO: Implementasi update
    }

    /**
     * Hapus event
     */
    public function destroy($id)
    {
        // TODO: Implementasi destroy
    }
}


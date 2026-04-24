<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    /**
     * Show the event detail page
     */
    public function show($id)
    {
        // TODO: Ambil data event dari database berdasarkan ID
        // Untuk sekarang, hanya render view tanpa data
        return view('event-detail');
    }

    /**
     * Show the checkout page for an event
     */
    public function checkout($id)
    {
        // TODO: Ambil data event dari database berdasarkan ID
        // TODO: Ambil data tiket yang tersedia
        // Untuk sekarang, hanya render view tanpa data
        return view('checkout');
    }

    /**
     * Show events catalog/listing
     */
    public function index()
    {
        // TODO: Ambil semua events dari database
        // Untuk sekarang, hanya render view tanpa data
        return view('katalog');
    }
}

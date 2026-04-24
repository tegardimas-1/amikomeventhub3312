<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    ////
    /**
     * Show the ticket page
     */
    public function show($id)
    {
        // TODO: Ambil data tiket dari database berdasarkan ID
        // Untuk sekarang, hanya render view tanpa data
        return view('ticket');
    }
}

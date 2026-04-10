<?php

use Illuminate\Support\Facades\Route;

Route::get('/tentang', function () {
    return '<h1>Ini adalah halaman Tentang Aplikasi Event Hub</h1>';
});

Route::get('/kontak', function () {
    return view('contact');
});

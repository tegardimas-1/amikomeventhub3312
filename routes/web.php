<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| WEB ROUTES - AmikomEventHub
|--------------------------------------------------------------------------
*/

// ==================== USER AREA ====================

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Events
Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('/{id}', [EventController::class, 'show'])->name('show');
    Route::get('/{id}/checkout', [EventController::class, 'checkout'])->name('checkout');
});

// Checkout Success
Route::get('/checkout/success/{orderId}', function ($orderId) {
    return view('checkout-success', ['order_id' => $orderId]);
})->name('checkout.success');

// Katalog (alias untuk events index)
Route::get('/katalog', [EventController::class, 'index'])->name('katalog');

// Tickets
Route::prefix('tickets')->name('tickets.')->group(function () {
    Route::get('/{id}', [TicketController::class, 'show'])->name('show');
});

// Static Pages
Route::get('/profil', fn() => view('profil'))->name('profil');
Route::get('/bantuan', fn() => view('bantuan'))->name('bantuan');
Route::get('/kontak', fn() => view('contact'))->name('kontak');
Route::get('/tentang', fn() => view('tentang'))->name('tentang');

// ==================== ADMIN AREA ====================

Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Events
    Route::prefix('events')->name('events.')->group(function () {
        Route::get('/', [AdminEventController::class, 'index'])->name('index');
        Route::get('/create', [AdminEventController::class, 'create'])->name('create');
        Route::post('/', [AdminEventController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminEventController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminEventController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminEventController::class, 'destroy'])->name('destroy');
    });

    // Transactions
    Route::prefix('transactions')->name('transactions.')->group(function () {
        Route::get('/', [TransactionController::class, 'index'])->name('index');
        Route::get('/{id}', [TransactionController::class, 'show'])->name('show');
    });

    // Categories
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });
});

<?php

use App\Http\Controllers\FakturController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockCardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/faktur/barcode-bawa', [FakturController::class, 'index_barcode_bawa'])->name('faktur.index_barcode_bawa');
    Route::get('/faktur/barcode-bawa/{id}', [FakturController::class, 'detail_barcode_bawa'])->name('faktur.barcode_bawa');
    Route::put('/faktur/barcode-bawa/{id}', [FakturController::class, 'update_barcode_bawa'])->name('faktur.update_barcode_bawa');

    Route::get('/faktur/pa-barcode-bawa', [FakturController::class, 'index_pa_barcode_bawa'])->name('faktur.index_pa_barcode_bawa');

    Route::get('/faktur/bayar', [FakturController::class, 'index_bayar'])->name('faktur.index_bayar');
    Route::get('/faktur/bayar/create', [FakturController::class, 'create_bayar'])->name('faktur.create_bayar');
    Route::post('/faktur/bayar', [FakturController::class, 'update_bayar'])->name('faktur.update_bayar');
});

Route::middleware('auth')->group(function () {
    Route::get('/stock-card', [StockCardController::class, 'index'])->name('stock_card.index');
    Route::get('/stock-card/create', [StockCardController::class, 'create'])->name('stock_card.create');
    Route::post('/stock-card/create', [StockCardController::class, 'store'])->name('stock_card.store');
    Route::put('/stock-card/{id}', [StockCardController::class, 'update'])->name('stock_card.update');
});

require __DIR__ . '/auth.php';

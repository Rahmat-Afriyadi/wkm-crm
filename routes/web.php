<?php

use App\Http\Controllers\FakturController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockCardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [AuthenticatedSessionController::class, 'create']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/faktur/barcode-bawa', [FakturController::class, 'index_barcode_bawa'])->name('dashboard');
    Route::get('/faktur/barcode-bawa/{id}', [FakturController::class, 'detail_barcode_bawa'])->name('faktur.barcode_bawa');
    Route::put('/faktur/barcode-bawa/{id}', [FakturController::class, 'update_barcode_bawa'])->name('faktur.update_barcode_bawa');

    Route::get('/faktur/pa-barcode-bawa', [FakturController::class, 'index_pa_barcode_bawa'])->name('faktur.index_pa_barcode_bawa');

    Route::get('/faktur/bayar', [FakturController::class, 'index_bayar'])->name('faktur.index_bayar');
    Route::get('/faktur/bayar/create', [FakturController::class, 'create_bayar'])->name('faktur.create_bayar');
    Route::post('/faktur/bayar', [FakturController::class, 'update_bayar'])->name('faktur.update_bayar');

    Route::get('/faktur/kembali', [FakturController::class, 'index_kembali'])->name('faktur.index_kembali');
    Route::get('/faktur/kembali/form-detail', [FakturController::class, 'form_kembali'])->name('faktur.form_kembali');
    Route::post('/faktur/detail-kembali', [FakturController::class, 'detail_post_barcode_kembali'])->name('faktur.detail_post_barcode_kembali');
    Route::get('/faktur/kembali/{id}', [FakturController::class, 'detail_barcode_kembali'])->name('faktur.detail_barcode_kembali');
    Route::post('/faktur/kembali/update', [FakturController::class, 'update_kartu_kembali'])->name('faktur.update_kartu_kembali');

    Route::get('/faktur/check/alasan-2', [FakturController::class, 'index_check'])->name('faktur.index_check');
    Route::get('/faktur/check/form-detail', [FakturController::class, 'form_check'])->name('faktur.form_check');
    Route::post('/faktur/detail-check', [FakturController::class, 'detail_post_barcode_check'])->name('faktur.detail_post_barcode_check');
    Route::get('/faktur/check/{id}', [FakturController::class, 'detail_barcode_check'])->name('faktur.detail_barcode_check');
    Route::post('/faktur/check/update', [FakturController::class, 'update_check_alasan_2'])->name('faktur.update_check_alasan_2');
});

Route::middleware('auth')->group(function () {
    Route::get('/stock-card', [StockCardController::class, 'index'])->name('stock_card.index');
    Route::get('/stock-card/create', [StockCardController::class, 'create'])->name('stock_card.create');
    Route::post('/stock-card/create', [StockCardController::class, 'store'])->name('stock_card.store');
    Route::put('/stock-card/{id}', [StockCardController::class, 'update'])->name('stock_card.update');
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\FakturController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, "profile"])->name("profile");
Route::get('/barcode-bawa', [FakturController::class, "index"])->name("table-barcode-bawa");
Route::get('/barcode-bawa/{id}', [FakturController::class, "edit"])->name("edit-faktur");
Route::put('/barcode-bawa/{id}', [FakturController::class, "update"])->name("update-faktur");
Route::post('/barcode-bawa', [FakturController::class, "store"])->name("store-barcode-bawa");

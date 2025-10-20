<?php

use App\Http\Controllers\BarangTrxController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('barang/summary', [BarangTrxController::class, 'summary'])->name('barang.summary');
Route::resource('barang_trxes', BarangTrxController::class);

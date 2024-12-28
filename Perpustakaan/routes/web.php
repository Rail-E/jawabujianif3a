<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DetailPinjamController;

// Route untuk tabel Anggota
Route::resource('anggota', AnggotaController::class);

// Route untuk tabel Buku
Route::resource('buku', BukuController::class);

// Route untuk tabel DetailPinjam
Route::resource('detail-pinjam', DetailPinjamController::class);

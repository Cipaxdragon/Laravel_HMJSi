<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostinganController;

Route::get('/', [PostinganController::class, 'index'])->name('postingan.index');
Route::get('/beranda', [PostinganController::class, 'index'])
    ->name('beranda.index');



Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "tentang",
    ]);
});

Route::get('/pengumuman', [PostinganController::class, 'getPostinganByKategori_1'])
    ->name('pengumuman.index')
    ->middleware('web');

Route::get('/kegiatan', function () {
    return view('kegiatan', [
        "title" => "info kegiatan",
    ]);
});

Route::get('/beasiswa', function () {
    return view('beasiswa', [
        "title" => "beasiswa",
    ]);
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran', [
        "title" => "pendaftaran",
    ]);
});




// ==== admin ====

Route::get('/admin', function () {
    return view('admin/login', [
        "title" => "Login Kanda Rido"
    ]);
});

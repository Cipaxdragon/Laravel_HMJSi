<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PostinganController::class, 'index'])->name('postingan.index');
Route::get('/beranda', [\App\Http\Controllers\PostinganController::class, 'index'])
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

Route::get('/pengumuman', [\App\Http\Controllers\PostinganController::class, 'getPostinganByKategori_1'])
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
Route::post('/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'showLoginForm'])->name('admin');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'showLoginForm'])->name('admin.login');

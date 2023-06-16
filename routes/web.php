<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda',[
        "title" => "beranda",
    ]);
});
Route::get('/beranda', function () {
    return view('beranda',[
        "title" => "beranda",
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "kontak",
    ]);
});

Route::get('/tentang', function () {
    return view('tentang',[
        "title" => "tentang",
    ]);
});

Route::get('/pengumuman', function () {
    return view('pengumuman',[
        "title" => "pengumuman",
    ]);
});
Route::get('/kegiatan', function () {
    return view('kegiatan',[
        "title" => "info kegiatan",
    ]);
});

Route::get('/beasiswa', function () {
    return view('beasiswa',[
        "title" => "beasiswa",
    ]);
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran',[
        "title" => "pendaftaran",
    ]);
});

use App\Http\Controllers\PengurusController;
Route::get('/', [PengurusController::class, 'index']);













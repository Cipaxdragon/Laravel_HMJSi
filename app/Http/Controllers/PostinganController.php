<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Postingan;
use Illuminate\Support\Str;


class PostinganController extends Controller
{
    public function index()
    {
        $postingan = Postingan::all();
        $title = "Beranda";
        return view('beranda', compact('postingan', 'title'));

    }


    public function getPostinganByKategori_1()
    {
        $postingan = DB::table('postingan')
        ->where('kategori', 4)
        ->orderBy('waktu', 'DESC')
        ->get();

       return view('pengumuman', ['postingan' => $postingan, 'title' => 'pengumuman']);
    }


}

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
        return view('postingan.index', compact('postingan'));
    }

    public function create()
    {
        return view('postingan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'required',
            'teks' => 'required',
            'waktu' => 'required'
        ]);

        Postingan::create($request->all());

        return redirect()->route('postingan.index')
            ->with('success', 'Postingan berhasil ditambahkan.');
    }

    public function show(Postingan $postingan)
    {
        return view('postingan.show', compact('postingan'));
    }

    public function edit(Postingan $postingan)
    {
        return view('postingan.edit', compact('postingan'));
    }

    public function update(Request $request, Postingan $postingan)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'required',
            'teks' => 'required',
            'waktu' => 'required'
        ]);

        $postingan->update($request->all());

        return redirect()->route('postingan.index')
            ->with('success', 'Postingan berhasil diperbarui.');
    }

    public function destroy(Postingan $postingan)
    {
        $postingan->delete();

        return redirect()->route('postingan.index')
            ->with('success', 'Postingan berhasil dihapus.');
    }


    //menampilakan tabel postingan utnuk kategori 4 dan sorting lewat waktu
    public function getPostinganByKategori()
    {
        $postingan = DB::table('postingan')
        ->where('kategori', 4)
        ->orderBy('waktu', 'DESC')
        ->get();

        return view('beranda', ['postingan' => $postingan]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil, redirect ke halaman beranda admin
            return redirect()->route('admin.dashboard');
        } else {
            // Autentikasi gagal, redirect kembali ke halaman login dengan pesan error dan data input sebelumnya
            return redirect()->route('admin')->withInput($request->only('username'))->withErrors('Salah Ki Username sama Password  Ta Kanda');
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $data = pengurus::all();
        return view('beranda', compact('data'));
    }
}

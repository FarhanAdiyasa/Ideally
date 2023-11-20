<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('daftar-artikel', [
        "articles" =>  Artikel::all(),
        ]);
    }
}

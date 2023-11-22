<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    
    public function index()
    {
        $sort = '';
        $artikels = Artikel::orderBy('tanggal_publikasi', 'desc');
    
        if (request('filter_artikel_onKategori')) {
            $sort = request()->get('filter_artikel_onKategori');
            $artikels = Artikel::orderBy('tanggal_publikasi', $sort);
        }
        if (request('cari_artikel_onKategori')) {
            $searchKeyword = request()->get('cari_artikel_onKategori');
            $artikels = Artikel::where('judul_artikel', 'LIKE', '%' . $searchKeyword . '%');
        }
    
        return view('daftar-artikel', [
            "articles" => $artikels->paginate(18),
            "jumlah" => Artikel::count(),
            "sort" => $sort,
            "articles_acak" => Artikel::inRandomOrder()->limit(4)->get(),
            "articles_acak2" => Artikel::inRandomOrder()->limit(4)->get(),
            "articles_terbaru" => Artikel::orderBy('tanggal_publikasi', 'desc')->limit(4)->get(),
            "articles_terpopuler" => Artikel::orderBy('pengunjung', 'desc')->limit(4)->get(),
        ]);
    }
      
}

<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori_Artikel;
use App\Models\Komentar;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    
    public function index()
    {
        return view('landing-artikel', [
            "komentars" => Komentar::limit(15)->get(),
            "active" => '',
            "articles_terbaru" => Artikel::orderBy('tanggal_publikasi', 'desc')->limit(15)->get(),
            "articles_terpopuler" => Artikel::orderBy('pengunjung', 'desc')->limit(15)->get(),
        ]);
    }
    public function show($kategori)
    {
        $data = Artikel::whereHas('kategori_artikel', function ($query) use ($kategori) {
            $query->where('nama_kategori_artikel', $kategori);
        })->limit(12)->get();
        return view('Artikel-byKategori',[
            'kategori'=>Kategori_Artikel::where('nama_kategori_artikel', $kategori)->first(),
            'data' => $data
        ]);
    }
    public function byKategori()
    {
        $sort = '';
        $kategori = request('kategori');
        if (request('sort')) {
            $sort = request()->get('sort');
        }
    
        return view('daftar-artikel', [
            "articles" => Artikel::kategori(request(['kategori']))->filter(request(['sort', 'search']))->paginate(18),
            "jumlah" => Artikel::count(),
            "active" => $kategori,
            "sort" => $sort,
            "articles_acak" => Artikel::inRandomOrder()->limit(4)->get(),
            "articles_acak2" => Artikel::inRandomOrder()->limit(4)->get(),
            "articles_terbaru" => Artikel::orderBy('tanggal_publikasi', 'desc')->limit(4)->get(),
            "articles_terpopuler" => Artikel::orderBy('pengunjung', 'desc')->limit(4)->get(),
        ]);
    }

    
      
}

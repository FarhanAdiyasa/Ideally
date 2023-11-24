<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komentar;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    
    public function index()
    {
        $sort = '';
        $kategori = request('kategori');
        if (request('filter_artikel_onKategori')) {
            $sort = request()->get('filter_artikel_onKategori');
        }
    
        return view('daftar-artikel', [
            "articles" => Artikel::kategori(request(['kategori'])),
            "komentars" => Komentar::all()->limit(15),
            "active" => $kategori,
            "articles_terbaru" => Artikel::orderBy('tanggal_publikasi', 'desc')->limit(15)->get(),
            "articles_terpopuler" => Artikel::orderBy('pengunjung', 'desc')->limit(15)->get(),
        ]);
    }
    public function show($kategori)
    {
        $data = Artikel::whereHas('kategori_artikel', function ($query) use ($kategori) {
            $query->where('nama_kategori_artikel', $kategori);
        })->limit(15)->get();
        return view('Artikel-byKategori',[
            'data' => $data
        ]);
    }
    public function byKategori()
    {
        $sort = '';
        $kategori = request('kategori');
        if (request('filter_artikel_onKategori')) {
            $sort = request()->get('filter_artikel_onKategori');
        }
    
        return view('daftar-artikel', [
            "articles" => Artikel::kategori(request(['kategori']))->filter(request(['filter_artikel_onKategori', 'cari_artikel_onKategori']))->paginate(18),
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

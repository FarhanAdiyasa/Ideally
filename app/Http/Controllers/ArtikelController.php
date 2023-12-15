<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komentar;
use Illuminate\Http\Request;
use App\Models\Rating_Artikel;
use App\Models\Kategori_Artikel;
use Illuminate\Support\Facades\DB;


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
        $data = Artikel::byKategori($kategori)->limit(12)->get();
        return view('Artikel-byKategori',[
            'kategori'=>Kategori_Artikel::where('nama_kategori_artikel', $kategori)->first(),
            'data' => $data
        ]);
    }
    public function sKomentar($slug)
    {
        $artikel = Artikel::firstWhere('slug', $slug);
        return view('partials/artikel-komentar',[
            "artikel"=>$artikel
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
            "articles" => Artikel::byKategori($kategori)->filter(request(['sort', 'search']))->paginate(18),
            "jumlah" => Artikel::count(),
            "active" => $kategori,
            "sort" => $sort,
            "articles_acak" => Artikel::inRandomOrder()->limit(4)->get(),
            "articles_acak2" => Artikel::inRandomOrder()->limit(4)->get(),
            "articles_terbaru" => Artikel::orderBy('tanggal_publikasi', 'desc')->limit(4)->get(),
            "articles_terpopuler" => Artikel::orderBy('pengunjung', 'desc')->limit(4)->get(),
        ]);
    }


    public function baca($slug)
    {
        $artikel = Artikel::FirstWhere('slug',$slug);
        return view('baca-artikel', [
            "active"=>$artikel->kategori_artikel[0]->nama_kategori_artikel,
            "artikel"=>$artikel,
            "rating"=>Rating_Artikel::where(['id_artikel' => $artikel->id_artikel, 'user_id' => 1])->first(),
            "articles_acak" => Artikel::inRandomOrder()->limit(4)->get(),
            "articles_terbaru" => Artikel::orderBy('tanggal_publikasi', 'desc')->limit(4)->get(),
            "articles_terpopuler" => Artikel::orderBy('pengunjung', 'desc')->limit(4)->get(),
            "articles_terkait" => Artikel::byKategori($artikel->kategori_artikel[0]->nama_kategori_artikel)->get(),
        ]);
    }
    public function rating(Request $request, $slug)
    {
        $artikel = Artikel::firstWhere('slug', $slug);
        $selectedRating = $request->input('rating');

        // Check if a rating already exists for the article
        // Check if a rating already exists for the article and the logged-in user
        $existingRating = Rating_Artikel::where('id_artikel', $artikel->id_artikel)
        ->where('user_id', 8)
        ->first();
        try {
            DB::beginTransaction();
            if ($existingRating) {
                $existingRating->rating_artikel = $selectedRating;
                $existingRating->save();
            } else {
            // If no rating exists, create a new one
                $rating = new Rating_Artikel();
                $rating->user_id = 8;
                $rating->id_artikel = $artikel->id_artikel;
                $rating->rating_artikel = $selectedRating;
                $rating->save();
            }    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
    }
    public function komentar(Request $request, $slug)
    {
        $artikel = Artikel::firstWhere('slug', $slug);
        $isi_komentar  = $request->input('komentar');
        try {
            DB::beginTransaction();
                $komentar = new Komentar();
                $komentar->created_by = 8;
                $komentar->id_artikel = $artikel->id_artikel;
                $komentar->isi_komentar = $isi_komentar;
                $komentar->status_tampil = 0;
                $komentar->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        } 
    }



    
      
}

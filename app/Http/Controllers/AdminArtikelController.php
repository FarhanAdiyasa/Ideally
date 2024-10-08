<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\Artikel;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Artikel_Kategori;
use App\Models\Kategori_Artikel;
use App\Models\Rating_Artikel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateArtikelRequest;
use App\Http\Requests\UpdateArtikelRequest;
use App\Models\Komentar;
use App\Models\Sumber_Artikel;
use PDO;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('Pages/Artikel/list-artikel', ["artikels"=>$artikels,  "active"=>"artikel"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Kategori_Artikel::all();
        return view('Pages/Artikel/add-artikel', ["categories"=>$categories,  "active"=>"artikel"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArtikelRequest $request)
    {
        
        $validatedData = $request->validated();
        try {
            DB::beginTransaction();
            if ($request->hasFile('gambar_artikel')) {
                    $photo = $request->file('gambar_artikel');
                    $filename = $photo->getClientOriginalName();
    
                    // Menggunakan timestamp untuk membuat nama file yang unik
                    $filenameToStore = time() . '_' . $filename;
    
                    // Simpan file ke direktori 'photos'
                    $path = $photo->storeAs('photos', $filenameToStore);
            }
            
            $description = $request->isi_artikel;
            $dom = new DOMDocument();
            $dom->loadHTML(htmlspecialchars($description), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getElementsByTagName('img');
            if($images){
                foreach ($images as $key => $img) {
                    $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                    $image_name = "/storage/photos/" . time(). $key.'.png';
                    file_put_contents(public_path().$image_name,$data);
    
                    $img->removeAttribute('src');
                    $img->setAttribute('src',$image_name);
                }
                $description = $dom->saveHTML();
            }

                $artikel = new Artikel();
                $artikel->fill($validatedData);
                $artikel->isi_artikel = $description;
                $artikel->gambar_artikel =  $path ?? null;
                if($request->tanggal_publikasi == "true"){
                    $artikel->tanggal_publikasi = now();
                }
                if ($validatedData['author'] == "sendiri") {
                    $artikel->penulis_artikel = auth()->user()->firstname.' '.auth()->user()->lastname;
                    $artikel->profesi_penulis_artikel = auth()->user()->profesi;
                    $artikel->deskripsi_singkat_penulis_artikel = auth()->user()->deskripsi_diri;
                }

                $artikel->slug =Str::slug($artikel->judul_artikel);
                $artikel->created_by = auth()->user()->user_id;
                $artikel->save();
                $artikel->kategori_artikel()->sync($request['kategori_artikel']);
                $artikel->sumberArtikel()->sync($request['sumber']);
                DB::commit();
    
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        if($request->tanggal_publikasi == "true"){
            return redirect()->route('artikels')->with('success', 'Artikel berhasil disimpan dan diterbitkan.');
        }else{
            return redirect()->route('artikels')->with('success', 'Artikel berhasil disimpan.');
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function komentar($id)
    {
        $artikel = Artikel::findOrFail($id);
        $komentars = Komentar::where('id_artikel', $id)->get();
        return view('Pages/Artikel/komentar-artikel', ['artikel' => $artikel, 'komentars' => $komentars,  "active"=>"artikel"]);
    }    

    public function hideKomentar(Request $request)
    {
         $id = $request->input('id_komentar');
        try {
            DB::beginTransaction();
            $komentar = Komentar::findOrFail($id);
            $komentar->status_tampil = $request->input('status') == "true" ? 1 : 0;
            $komentar->save();
            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('artikels')->with('success', 'Komentar berhasil dihapus!');
        // return redirect()->route('daftar.komentar',['id' => $komentar->id_artikel])->with('success', 'Status data berhasil diubah!');
    }    
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $categories = Kategori_Artikel::all();
        $sumbers = Sumber_Artikel::where(["id_artikel"=>$artikel->id_artikel])->get();
        return view('Pages/Artikel/edit-artikel', ['artikel'=>$artikel,"categories"=>$categories, "sumbers"=>$sumbers,  "active"=>"artikel"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtikelRequest $request, $id)
    {
        $validatedData = $request->validated();
        $description = $validatedData['isi_artikel'];
        try {
            DB::beginTransaction();

                $dom = new DOMDocument();
                $dom->loadHTML(htmlspecialchars($description), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

                $images = $dom->getElementsByTagName('img');
                if($images){
                    foreach ($images as $key => $img) {
        
                        // Check if the image is a new one
                        if (strpos($img->getAttribute('src'),'data:image/') ===0) {
                          
                            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                            $image_name = "/storage/photos/" . time(). $key.'.png';
                            file_put_contents(public_path().$image_name,$data);
                            
                            $img->removeAttribute('src');
                            $img->setAttribute('src',$image_name);
                        }
            
                    }
                    $description = $dom->saveHTML();
    
                }
               
                $artikel = Artikel::findOrFail($id);
                $artikel->fill($validatedData);
                $artikel->isi_artikel = $description;
                $path = $artikel->gambar_artikel;
                if ($request->hasFile('gambar_artikel')) {
                        $photo = $request->file('gambar_artikel');
                        $filename = $photo->getClientOriginalName();
        
                        // Menggunakan timestamp untuk membuat nama file yang unik
                        $filenameToStore = time() . '_' . $filename;
        
                        Storage::delete($path);
                        $path = $photo->storeAs('photos', $filenameToStore);
                }
               
                $artikel->gambar_artikel =  $path ?? null;
                if($request->tanggal_publikasi == "true"){
                    $artikel->tanggal_publikasi = now();
                }
                else{
                    $artikel->tanggal_publikasi = null;
                }
                if ($validatedData['author'] == "sendiri") {
                    $artikel->penulis_artikel = auth()->user()->firstname.' '.auth()->user()->lastname;
                    $artikel->profesi_penulis_artikel = auth()->user()->profesi;
                    $artikel->deskripsi_singkat_penulis_artikel = auth()->user()->deskripsi_diri;
                }


                $artikel->slug =Str::slug($artikel->judul_artikel);
                $artikel->created_by = auth()->user()->user_id;;
                $artikel->save();
                $artikel->kategori_artikel()->sync($request['kategori_artikel']);
                $artikel->sumberArtikel()->sync($request['sumber']);
                DB::commit();

        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        if($request->tanggal_publikasi == "true"){
            return redirect()->route('artikels')->with('success', 'Artikel berhasil disimpan dan diterbitkan.');
        }else{
            return redirect()->route('artikels')->with('success', 'Artikel berhasil disimpan.');
        }
    }

    public function delete($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('Pages/Artikel/delete-artikel', ['artikel'=>$artikel,  "active"=>"artikel"]);
    }
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();
            $artikel = Artikel::findOrFail($id);
            $artikel->delete();
            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }

        return redirect()->route('artikels')->with('success', 'Data berhasil dihapus.');
    }
    public function preview($slug)
    {
        $artikel = Artikel::FirstWhere('slug',$slug);
        $active = $artikel->kategori_artikel[0]->nama_kategori_artikel;
        $sumbers = Sumber_Artikel::where(["id_artikel"=>$artikel->id_artikel])->get();
        return view('Pages/Artikel/preview-artikel', [
            "active"=> $active,
            "artikel"=>$artikel,
            "rating"=>Rating_Artikel::where(['id_artikel' => $artikel->id_artikel, 'user_id' => 1])->first(),
            "articles_acak" => Artikel::inRandomOrder()->limit(4)->get(),
            "articles_terbaru" => Artikel::orderBy('tanggal_publikasi', 'desc')->limit(4)->get(),
            "articles_terpopuler" => Artikel::orderBy('pengunjung', 'desc')->limit(4)->get(),
            "articles_terkait" => Artikel::byKategori($active)->get(),
            "sumbers"=>$sumbers,
        ]);
    }
    public function post(Request $request)
    {
        $id = $request->input('id_artikel');
        try {
            DB::beginTransaction();
            $artikel = Artikel::findOrFail($id);
            $artikel->tanggal_publikasi = $request->input('status') == "true" ? now() : null;
            $artikel->save();
            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('artikels')->with('success', 'Data berhasil diterbitkan.');
    }
}

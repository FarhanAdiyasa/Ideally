<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateArtikelRequest;
use App\Models\Artikel;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages/Artikel/add-artikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArtikelRequest $request)
    {
        dd($request);
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
                
                // Simpan path file ke dalam database
               
                $artikel = new Artikel();
                $artikel->fill($validatedData);
                $artikel->gambar_artikel = $photoPaths[0] ?? null;
                if($request->tanggal_publikasi == "true"){
                    $artikel->tanggal_publikasi = now();
                }
    
                $artikel->slug =Str::slug($artikel->judul_artikel);
                $artikel->created_by = 1;
                $artikel->save();
                $artikel->kategori_artikel()->sync($request->file('kategori_artikel'));
                DB::commit();
    
        } catch (\Exception $e) {
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('daftar-produk')->with('success', 'Data has been successfully stored.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Agrigard;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateAgrigard;
use App\Http\Requests\AgrigardRequest;
use App\Http\Requests\PromoRequest;
use App\Models\Promo;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promos = Promo::all();
    
        return view('Pages/Promo/list-promo', ['promos' => $promos]);
    }
    
    public function view($id)
    {
        $agrigard = Agrigard::findOrFail($id);
        return view('Pages/Product/detail-product', ['agrigard'=>$agrigard]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages/Promo/add-promo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PromoRequest $request)
    {
       dd($request);
    $validatedData = $request->validated();
    try {
        DB::beginTransaction();
        if ($request->hasFile('photos')) {
            $photoPaths = [];

            foreach ($request->file('photos') as $photo) {
                $filename = $photo->getClientOriginalName();

                // Menggunakan timestamp untuk membuat nama file yang unik
                $filenameToStore = time() . '_' . $filename;

                // Simpan file ke direktori 'photos'
                $path = $photo->storeAs('photos', $filenameToStore);

                // Simpan path file ke dalam array
                $photoPaths[] = $path;
            }
            
            // Simpan path file ke dalam database
           
            $agrigard = new Agrigard;
            $agrigard->fill($validatedData);
            $agrigard->gambar_1 = $photoPaths[0] ?? null;
            $agrigard->gambar_2 = $photoPaths[1] ?? null;
            $agrigard->gambar_3 = $photoPaths[2] ?? null;
            $agrigard->gambar_4 = $photoPaths[3] ?? null;
            if($request->tanggal_publikasi == "true"){
                $agrigard->tanggal_publikasi = now();
            }
            // Harga_b2I_1+_unit
            $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
            $agrigard->harga_b2I_1_unit= $harga_b2I_1_unit;

            // Harga_b2I_11+_unit
            $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
            $agrigard->harga_b2I_11_unit = $harga_b2I_11_unit;

            $harga_b2I_31_unit = str_replace(['.', ''], '', $request['harga_b2I_31_unit']);
            $agrigard->harga_b2I_31_unit = $harga_b2I_31_unit;


            // Harga_b2B_1+_unit
            $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
            $agrigard->harga_b2B_1_unit = $harga_b2B_1_unit;

            // Harga_b2B_11+_unit
            $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
            $agrigard->harga_b2B_11_unit = $harga_b2B_11_unit;

            $harga_b2B_31_unit = str_replace(['.', ''], '', $request['harga_b2B_31_unit']);
            $agrigard->harga_b2B_31_unit = $harga_b2B_31_unit;

            // Harga_b2C_1+_unit
            $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
            $agrigard->harga_b2C_1_unit = $harga_b2C_1_unit;

            // Harga_b2C_11+_unit
            $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
            $agrigard->harga_b2C_11_unit = $harga_b2C_11_unit;

            // Harga_b2C_31+_unit
            $harga_b2C_31_unit = str_replace(['.', ','], '', $request['harga_b2C_31_unit']);
            $agrigard->harga_b2C_31_unit = $harga_b2C_31_unit;

            $agrigard->slug =Str::slug($agrigard->nama_produk);
            $agrigard->created_by = 1;
            $agrigard->save();
            DB::commit();
        } else {
            // Jika tidak ada gambar, tangani sesuai kebutuhan bisnis Anda
        }

    } catch (\Exception $e) {
        DB::rollback();
       return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
    }
    return redirect()->route('daftar-produk')->with('success', 'Data has been successfully stored.');
    }
    

    public function show($brand)
    {
        $products = "";
        if($brand == "agrigard"){
            $products = Agrigard::whereNotNull('tanggal_publikasi')->get();
        }
        foreach ($products as $product) {
            $hargaRanges = [];

            $columnPrefix = 'harga_';
    
            $min = null;
            $max = null;

            for ($i = 1; $i <= 3; $i++) {  
                $columnName = $columnPrefix . 'b2I_' . $i . '_unit';
                $harga = $product->{$columnName};
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
            }
    
            $hargaRanges[] = $min !== null && $max !== null ? $min . ' - ' . $max : 'No data';
    
            $product->harga_ranges = $hargaRanges;
        }
        
        return view('partials/add_product_promo', ['products'=>$products,'brand'=>$brand]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agrigard = Agrigard::findOrFail($id);
        return view('Pages/Product/edit-product', ['agrigard'=>$agrigard]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgrigard $request, $id)
    {
       
        $validatedData = $request->validated();
        $idx=0;
        try {
            DB::beginTransaction();
            $photoPaths = [];
            $photoPaths = explode(',', $request->input('existing_images'));

            if ($request->hasFile('photos')) {
                $photoPaths = [];
                $photoPaths = explode(',', $request->input('existing_images'));
                foreach ($request->file('photos') as $photo) {
                    $filename = $photo->getClientOriginalName();
                    foreach ($photoPaths as $index => $photoPath) {
                        if (strpos($photoPath, $filename) !== false) {
                            $photo->storeAs('photos', $photoPath);
                        }
                    }
                }
            }
            foreach ($photoPaths as $index => $photoPath) {
                $photoPaths[$index] = "photos/" . $photoPaths[$index];
            }
                $agrigard = Agrigard::findOrFail($id);
                $imagePathsFromDatabase = [
                    "gambar_1" => $agrigard->gambar_1,
                    "gambar_2" => $agrigard->gambar_2,
                    "gambar_3" => $agrigard->gambar_3,
                    "gambar_4" => $agrigard->gambar_4,
                ];
                foreach ($imagePathsFromDatabase as $key => $imagePath) {
                    if ($imagePath !== null && !in_array($imagePath, $photoPaths)) {
                        // Hapus file dari penyimpanan
                        Storage::delete($imagePath);
                
                        // Set nilai $imagePath di database menjadi null
                        $imagePathsFromDatabase[$key] = null;
                    }
                }
                $agrigard->fill($validatedData);
                
                $agrigard->gambar_1 = $photoPaths[0] ?? null;
                $agrigard->gambar_2 = $photoPaths[1] ?? null;
                $agrigard->gambar_3 = $photoPaths[2] ?? null;
                $agrigard->gambar_4 = $photoPaths[3] ?? null;
                if($request->tanggal_publikasi == "true"){
                    $agrigard->tanggal_publikasi = now();
                }
                // Harga_b2I_1+_unit
                $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
                $agrigard->harga_b2I_1_unit= $harga_b2I_1_unit;
    
                // Harga_b2I_11+_unit
                $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
                $agrigard->harga_b2I_11_unit = $harga_b2I_11_unit;
    
                $harga_b2I_31_unit = str_replace(['.', ''], '', $request['harga_b2I_31_unit']);
                $agrigard->harga_b2I_31_unit = $harga_b2I_31_unit;

                // Harga_b2B_1+_unit
                $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
                $agrigard->harga_b2B_1_unit = $harga_b2B_1_unit;
    
                // Harga_b2B_11+_unit
                $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
                $agrigard->harga_b2B_11_unit = $harga_b2B_11_unit;
    
                $harga_b2B_31_unit = str_replace(['.', ''], '', $request['harga_b2B_31_unit']);
                $agrigard->harga_b2B_31_unit = $harga_b2B_31_unit;
    
                // Harga_b2C_1+_unit
                $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
                $agrigard->harga_b2C_1_unit = $harga_b2C_1_unit;
    
                // Harga_b2C_11+_unit
                $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
                $agrigard->harga_b2C_11_unit = $harga_b2C_11_unit;
    
                // Harga_b2C_31+_unit
                $harga_b2C_31_unit = str_replace(['.', ','], '', $request['harga_b2C_31_unit']);
                $agrigard->harga_b2C_31_unit = $harga_b2C_31_unit;

                $agrigard->save();
                DB::commit();
            
    
        } catch (\Exception $e) {
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('daftar-produk')->with('success', 'Data has been successfully stored.');
    }

    public function delete($id)
    {
        $agrigard = Agrigard::findOrFail($id);
        return view('Pages/Product/delete-product', ['agrigard'=>$agrigard]);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $agrigard = Agrigard::findOrFail($id);

            $oldPath = $agrigard->gambar_1;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $agrigard->gambar_2;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $agrigard->gambar_3;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $agrigard->gambar_4;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $agrigard->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }

        return redirect()->route('daftar-produk')->with('success', 'Data has been successfully deleted.');
    }

    public function post(Request $request)
    {
        $id = $request->input('agrigard_id');
        try {
            DB::beginTransaction();
            $agrigard = Agrigard::findOrFail($id);
            $agrigard->tanggal_publikasi = $request->input('status') == "true" ? now() : null;
            $agrigard->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('daftar-produk')->with('success', 'Data status has been successfully changed .');
    }
    
}

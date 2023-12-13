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
use App\Models\Batunesia;
use App\Models\Dedikasi_Flora;
use App\Models\Everlas_Things;
use App\Models\Konkurito;
use App\Models\Promo;
use App\Models\Shineage;
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
    $validatedData = $request->validated();
    try {
        DB::beginTransaction();
        
            $promo = new Promo;
            $promo->fill($validatedData);
            $targetPromo = $request->input('target_promo');
            $promo->target_promo_b2i = in_array('b2i', $targetPromo);
            $promo->target_promo_b2c = in_array('b2c', $targetPromo);
            $promo->target_promo_b2b = in_array('b2b', $targetPromo);

            
            $nominal_promo = str_replace(['.', ''], '', $request['nominal_promo']);
            $promo->nominal_promo= $nominal_promo;

            $minimum_pembelian = str_replace(['.', ''], '', $request['minimum_pembelian']);
            $promo->minimum_pembelian= $minimum_pembelian;

            if($request->tanggal_publikasi == "true"){
                $promo->tanggal_publikasi = now();
            }
            $promo->created_by = 1;
            
            $promo->save();

            $produk_ids = array_map('intval', explode(",", $request->input('selected_ids')));
            if ($request['jenis_promo'] && $request['jenis_promo'] == "Produk") {
                $jenisProduk = $request['jenis_produk'];
                
                $modelMappings = [
                    'agrigard' => 'agrigards',
                    'shineage' => 'shineages',
                    'nurseri' => 'nurseris',
                    'batunesia' => 'batunesias',
                    'everlas_thing' => 'everlass',
                    'konkurito' => 'konkuritos',
                ];
            
                if (array_key_exists($jenisProduk, $modelMappings)) {
                    $relation = $modelMappings[$jenisProduk];
                    $promo->$relation()->sync($produk_ids);
                }
            }            
            if($request['jenis_promo'] && $request['jenis_promo']=="Brand"){
                foreach($request['jenis_brand'] as $jenis_brand){
                    if ($jenis_brand == "agrigard") {
                        $agrigardIds = Agrigard::pluck('id_agrigard')->toArray();
                        $promo->agrigards()->sync($agrigardIds);
                    }
                    else if ($jenis_brand == "shinege") {
                        $shineageIds = Shineage::pluck('id_shineage')->toArray();
                        $promo->shineages()->sync($shineageIds);
                    }
                    else if ($jenis_brand == "nurseris") {
                        $nurseriIds = Dedikasi_Flora::pluck('id_nurseri')->toArray();
                        $promo->nurseris()->sync($nurseriIds);
                    }
                    else if ($jenis_brand == "batunesias") {
                        $batunesiaIds = Dedikasi_Flora::pluck('id_batu')->toArray();
                        $promo->batunesias()->sync($batunesiaIds);
                    }
                    else if ($jenis_brand == "everlas_thing") {
                        $everlassIds = Dedikasi_Flora::pluck('id_everlas_things')->toArray();
                        $promo->everlass()->sync($everlassIds);
                    }
                    else if ($jenis_brand == "konkuritos") {
                        $konkuritoIds = Dedikasi_Flora::pluck('id_konkurito')->toArray();
                        $promo->konkuritos()->sync($konkuritoIds);
                    }
                    
                }
            }


            
            DB::commit();

    } catch (\Exception $e) {
        dd($e->getMessage());
        DB::rollback();
       return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
    }
    return redirect()->route('daftar-promo')->with('success', 'Data has been successfully stored.');
    }
    

    public function show($brand)
    {
        $products = "";
        if($brand == "agrigard"){
            $products = Agrigard::whereNotNull('tanggal_publikasi')->get();
        }else if($brand == "batunesia"){
            $products = Batunesia::whereNotNull('tanggal_publikasi')->get();
        }else if($brand == "nurseri"){
            $products = Dedikasi_Flora::whereNotNull('tanggal_publikasi')->get();
        }else if($brand == "konkurito"){
            $products = Konkurito::whereNotNull('tanggal_publikasi')->get();
        }else if($brand == "everlas_thing"){
            $products = Everlas_Things::whereNotNull('tanggal_publikasi')->get();
        }else if($brand == "shineage"){
            $products = Shineage::whereNotNull('tanggal_publikasi')->get();
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
        $promo = Promo::findOrFail($id);
        return view('Pages/Product/edit-product', ['promo'=>$promo]);
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

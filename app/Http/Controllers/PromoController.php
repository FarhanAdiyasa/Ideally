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
    
        return view('Pages/Promo/list-promo', ['promos' => $promos, "active"=>"promo"]);
    }
    
    public function view($id)
    {
        $promo = Promo::findOrFail($id);
        return view('Pages/Promo/detail-promo', ['promo'=>$promo, "active"=>"promo"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages/Promo/add-promo', ["active"=>"promo"]);
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
            $promo->created_by = auth()->user()->user_id;;
            
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
            } else if($request['jenis_promo'] && $request['jenis_promo']=="Brand"){
                foreach($request['jenis_brand'] as $jenis_brand){
                    if (isset($jenis_brand)) {
                        if ($jenis_brand == "agrigard") {
                            $agrigardIds = Agrigard::pluck('id_agrigard')->toArray();
                            $promo->agrigards()->sync($agrigardIds);
                        }
                        else if ($jenis_brand == "shineage") {
                            $shineageIds = Shineage::pluck('id_shineage')->toArray();
                            $promo->shineages()->sync($shineageIds);
                        }
                        else if ($jenis_brand == "nurseri") {
                            $nurseriIds = Dedikasi_Flora::pluck('id_nurseri')->toArray();
                            $promo->nurseris()->sync($nurseriIds);
                        }
                        else if ($jenis_brand == "batunesia") {
                            $batunesiaIds = Batunesia::pluck('id_batu')->toArray();
                            $promo->batunesias()->sync($batunesiaIds);
                        }
                        else if ($jenis_brand == "everlas_thing") {
                            $everlassIds = Everlas_Things::pluck('id_everlas_things')->toArray();
                            $promo->everlass()->sync($everlassIds);
                        }
                        else if ($jenis_brand == "konkurito") {
                            $konkuritoIds = Konkurito::pluck('id_konkurito')->toArray();
                            $promo->konkuritos()->sync($konkuritoIds);
                        }
                    }
                }
            }


            
            DB::commit();

    } catch (\Exception $e) {
        dd($e->getMessage());
        DB::rollback();
       return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
    }
    if($request->tanggal_publikasi == "true"){
        return redirect()->route('daftar-promo')->with('success', 'Promo berhasil disimpan dan diterbitkan.');
   }else{
        return redirect()->route('daftar-promo')->with('success', 'Promo berhasil disimpan.');
   }
    }
    

    public function show($brand)
    {
        $products = "";
        if($brand == "agrigard"){
            $products = Agrigard::all();
        }else if($brand == "batunesia"){
            $products = Batunesia::all();
        }else if($brand == "nurseri"){
            $products = Dedikasi_Flora::all();
        }else if($brand == "konkurito"){
            $products = Konkurito::all();
        }else if($brand == "everlasthing"){
            $products = Everlas_Things::all();
        }else if($brand == "shineage"){
            $products = Shineage::all();
        }
        foreach ($products as $product) {
            $hargaRanges = [];
    
            // Assuming harga columns have a common prefix
            $columnPrefix = 'harga_';
    
            $min = null;
            $max = null;
    
            // Iterate over harga columns and compute overall range
            for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2I_' . $i . '_unit';
                $harga = $product->{$columnName};  // Get the harga value for the current column
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
               
            }
            for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2C_' . $i . '_unit';
                $harga = $product->{$columnName};  // Get the harga value for the current column
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
               
            }
            for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2B_' . $i . '_unit';
                $harga = $product->{$columnName};  // Get the harga value for the current column
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
            }
            
          $hargaRanges[] = $min !== null && $max !== null
    ? 'Rp. ' . number_format($min, 0, ',', '.') . ' - Rp. ' . number_format($max, 0, ',', '.')
    : 'No data';

            $product->harga_ranges = $hargaRanges;
        }
        
        return view('partials/add_product_promo', ['products'=>$products,'brand'=>$brand]);
    }
    public function showEdit($id, $brand)
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
    
            // Assuming harga columns have a common prefix
            $columnPrefix = 'harga_';
    
            $min = null;
            $max = null;
    
            // Iterate over harga columns and compute overall range
            for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2I_' . $i . '_unit';
                $harga = $product->{$columnName};  // Get the harga value for the current column
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
               
            }
            for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2C_' . $i . '_unit';
                $harga = $product->{$columnName};  // Get the harga value for the current column
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
               
            }
            for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2B_' . $i . '_unit';
                $harga = $product->{$columnName};  // Get the harga value for the current column
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
            }
            
          $hargaRanges[] = $min !== null && $max !== null
    ? 'Rp. ' . number_format($min, 0, ',', '.') . ' - Rp. ' . number_format($max, 0, ',', '.')
    : 'No data';

            $product->harga_ranges = $hargaRanges;
        }
        $idsProdu = DB::table('view_product_promo')
        ->where('id_promo', $id)
        ->get();
        $idsProduk = collect($idsProdu)->pluck('id_produk')->toArray();
        $brandProduk = collect($idsProdu)->pluck('brand_produk')->toArray();
        
        return view('partials/edit_product_promo', ['products'=>$products,'brand'=>$brand,'ids'=>$idsProduk, 'brand_produk'=>$brandProduk]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $promo = Promo::findOrFail($id);
        $results = DB::select('SELECT DISTINCT id_promo, brand_produk FROM view_product_promo WHERE id_promo = :id_promo', ['id_promo' => $promo->id_promo]);
        $brands = array_column($results, 'brand_produk');
        return view('Pages/Promo/edit-promo', ['promo'=>$promo, "brands"=>$brands, "active"=>'promo']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PromoRequest $request, $id)
    {
       
        $validatedData = $request->validated();
        try {
            DB::beginTransaction();
            
                $promo = Promo::findOrFail($id);
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
                }else{
                    $promo->tanggal_publikasi = null;
                }
                $promo->created_by = auth()->user()->user_id;;
                
                $promo->save();
                $promo->agrigards()->detach();
                $promo->shineages()->detach();
                $promo->nurseris()->detach();
                // ... detach for other relationships ...
                $promo->everlass()->detach();
                $promo->konkuritos()->detach();
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
                } else if($request['jenis_promo'] && $request['jenis_promo']=="Brand"){
                    foreach($request['jenis_brand'] as $jenis_brand){
                        if (isset($jenis_brand)) {
                            if ($jenis_brand == "agrigard") {
                                $agrigardIds = Agrigard::pluck('id_agrigard')->toArray();
                                $promo->agrigards()->sync($agrigardIds);
                            }
                            else if ($jenis_brand == "shineage") {
                                $shineageIds = Shineage::pluck('id_shineage')->toArray();
                                $promo->shineages()->sync($shineageIds);
                            }
                            else if ($jenis_brand == "nurseri") {
                                $nurseriIds = Dedikasi_Flora::pluck('id_nurseri')->toArray();
                                $promo->nurseris()->sync($nurseriIds);
                            }
                            // else if ($jenis_brand == "batunesia") {
                            //     $batunesiaIds = Batunesia::pluck('id_batu')->toArray();
                            //     $promo->batunesias()->sync($batunesiaIds);
                            // }
                            else if ($jenis_brand == "everlas_thing") {
                                $everlassIds = Everlas_Things::pluck('id_everlas_things')->toArray();
                                $promo->everlass()->sync($everlassIds);
                            }
                            else if ($jenis_brand == "konkurito") {
                                $konkuritoIds = Konkurito::pluck('id_konkurito')->toArray();
                                $promo->konkuritos()->sync($konkuritoIds);
                            }
                        }
                    }
                }


                
                DB::commit();

        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
        return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        if($request->tanggal_publikasi == "true"){
            return redirect()->route('daftar-promo')->with('success', 'Promo berhasil disimpan dan diterbitkan.');
       }else{
            return redirect()->route('daftar-promo')->with('success', 'Promo berhasil disimpan.');
       }
    }

    public function delete($id)
    {
        $promo = Promo::findOrFail($id);
        return view('Pages/Promo/delete-promo', ['promo'=>$promo, "active"=>"promo"]);
    }
    public function checkPromoUnique($nama_promo)
    {
        $isUnique = !Promo::where('nama_promo', $nama_promo)->exists();
    
        return response()->json(['unique' => $isUnique]);
    }
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $promo = Promo::findOrFail($id);
            $promo->delete();
            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }

        return redirect()->route('daftar-promo')->with('success', 'Data berhasil dihapus.');
    }

    public function post(Request $request)
    {
        $id = $request->input('promo_id');
        try {
            DB::beginTransaction();
            $promo = Promo::findOrFail($id);
            $promo->tanggal_publikasi = $request->input('status') == "true" ? now() : null;
            $promo->save();
            DB::commit();
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('daftar-promo')->with('success', 'Data berhasil diterbitkan.');
    }
    
}

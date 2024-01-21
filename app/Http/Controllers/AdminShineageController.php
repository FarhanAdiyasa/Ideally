<?php

namespace App\Http\Controllers;

use Log;
use App\Models\shineage;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Updateshineage;
use App\Http\Requests\shineageRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateShineageRequest;

class AdminShineageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $shineages = Shineage::all();
    
    foreach ($shineages as $shineage) {
        $hargaRanges = [];

        // Assuming harga columns have a common prefix
        $columnPrefix = 'harga_';

        $min = null;
        $max = null;

        // Iterate over harga columns and compute overall range
        for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
            $columnName = $columnPrefix . 'b2I_' . $i . '_unit';
            $harga = $shineage->{$columnName};  // Get the harga value for the current column

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
            $harga = $shineage->{$columnName};  // Get the harga value for the current column

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
            $harga = $shineage->{$columnName};  // Get the harga value for the current column

            if ($harga !== null) {
                if ($min === null || $harga < $min) {
                    $min = $harga;
                }

                if ($max === null || $harga > $max) {
                    $max = $harga;
                }
            }
        }
        
      // Assuming $min and $max are numeric values representing amounts in Rupiah.

$hargaRanges[] = $min !== null && $max !== null
? 'Rp. ' . number_format($min, 0, ',', '.') . ' - Rp. ' . number_format($max, 0, ',', '.')
: 'No data';

        $shineage->harga_ranges = $hargaRanges;

    }

    return view('Pages/Shineage/list-shineages', ['shineages' => $shineages, "active"=>"shineage"]);
}

    
    public function view($id)
    {
        $shineage = shineage::findOrFail($id);
        return view('Pages/Shineage/detail-shineage', ['shineage'=>$shineage, "active"=>"shineage"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages/Shineage/add-shineage', ["active"=>"shineage"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShineageRequest $request)
    {
       
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
           
            $shineage = new shineage;
            $shineage->fill($validatedData);
            $shineage->gambar_1 = $photoPaths[0] ?? null;
            $shineage->gambar_2 = $photoPaths[1] ?? null;
            $shineage->gambar_3 = $photoPaths[2] ?? null;
            $shineage->gambar_4 = $photoPaths[3] ?? null;
            $shineage->gambar_5 = $photoPaths[4] ?? null;
            $shineage->gambar_6 = $photoPaths[5] ?? null;
            if($request->tanggal_publikasi == "true"){
                $shineage->tanggal_publikasi = now();
            }
            $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
            $shineage->harga_jual_projek_ideally = $harga_jual_projek_ideally;
            // Harga_b2I_1+_unit
            $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
            $shineage->harga_b2I_1_unit= $harga_b2I_1_unit;

            // Harga_b2I_11+_unit
            $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
            $shineage->harga_b2I_11_unit = $harga_b2I_11_unit;

            // Harga_b2B_1+_unit
            $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
            $shineage->harga_b2B_1_unit = $harga_b2B_1_unit;

            // Harga_b2B_11+_unit
            $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
            $shineage->harga_b2B_11_unit = $harga_b2B_11_unit;
        
            // Harga_b2C_1+_unit
            $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
            $shineage->harga_b2C_1_unit = $harga_b2C_1_unit;

            // Harga_b2C_11+_unit
            $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
            $shineage->harga_b2C_11_unit = $harga_b2C_11_unit;

            $shineage->slug =Str::slug($shineage->nama_produk);
            $shineage->created_by = auth()->user()->user_id;;
            $shineage->save();
            DB::commit();
        } else {
            // Jika tidak ada gambar, tangani sesuai kebutuhan bisnis Anda
        }

    } catch (\Exception $e) {

        dd($e->getMessage());
        DB::rollback();
       return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
    }
    if($request->tanggal_publikasi == "true"){
        return redirect()->route('shineages')->with('success', 'Produk berhasil disimpan dan diterbitkan.');
   }else{
        return redirect()->route('shineages')->with('success', 'Produk berhasil disimpan.');
   }
    }
    

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $shineage = Shineage::findOrFail($id);
        return view('Pages/Shineage/edit-shineage', ['shineage'=>$shineage, "active"=>"shineage"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShineageRequest $request, $id)
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
                $shineage = shineage::findOrFail($id);
                $imagePathsFromDatabase = [
                    "gambar_1" => $shineage->gambar_1,
                    "gambar_2" => $shineage->gambar_2,
                    "gambar_3" => $shineage->gambar_3,
                    "gambar_4" => $shineage->gambar_4,
                    "gambar_5" => $shineage->gambar_5,
                    "gambar_6" => $shineage->gambar_6,
                ];
                foreach ($imagePathsFromDatabase as $key => $imagePath) {
                    if ($imagePath !== null && !in_array($imagePath, $photoPaths)) {
                        // Hapus file dari penyimpanan
                        Storage::delete($imagePath);
                
                        // Set nilai $imagePath di database menjadi null
                        $imagePathsFromDatabase[$key] = null;
                    }
                }
                $shineage->fill($validatedData);
                
                $shineage->gambar_1 = $photoPaths[0] ?? null;
                $shineage->gambar_2 = $photoPaths[1] ?? null;
                $shineage->gambar_3 = $photoPaths[2] ?? null;
                $shineage->gambar_4 = $photoPaths[3] ?? null;
                $shineage->gambar_5 = $photoPaths[4] ?? null;
                $shineage->gambar_6 = $photoPaths[5] ?? null;
                if($request->tanggal_publikasi == "true"){
                    $shineage->tanggal_publikasi = now();
                }else{
                    $shineage->tanggal_publikasi = null;
                }
                $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
                $shineage->harga_jual_projek_ideally = $harga_jual_projek_ideally;
                // Harga_b2I_1+_unit
                $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
                $shineage->harga_b2I_1_unit= $harga_b2I_1_unit;
    
                // Harga_b2I_11+_unit
                $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
                $shineage->harga_b2I_11_unit = $harga_b2I_11_unit;

                // Harga_b2B_1+_unit
                $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
                $shineage->harga_b2B_1_unit = $harga_b2B_1_unit;
    
                // Harga_b2B_11+_unit
                $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
                $shineage->harga_b2B_11_unit = $harga_b2B_11_unit;
    
                // Harga_b2C_1+_unit
                $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
                $shineage->harga_b2C_1_unit = $harga_b2C_1_unit;
    
                // Harga_b2C_11+_unit
                $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
                $shineage->harga_b2C_11_unit = $harga_b2C_11_unit;

                $shineage->save();
                DB::commit();
            
    
        } catch (\Exception $e) {
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        if($request->tanggal_publikasi == "true"){
            return redirect()->route('shineages')->with('success', 'Produk berhasil disimpan dan diterbitkan.');
       }else{
            return redirect()->route('shineages')->with('success', 'Data berhasil disimpan.');
       }
    }

    public function delete($id)
    {
        $shineage = Shineage::findOrFail($id);
        return view('Pages/Shineage/delete-shineage', ['shineage'=>$shineage, "active"=>"shineage"]);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $shineage = shineage::findOrFail($id);

            $oldPath = $shineage->gambar_1;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $shineage->gambar_2;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $shineage->gambar_3;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $shineage->gambar_4;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $shineage->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }

        return redirect()->route('shineages')->with('success', 'Data berhasil dihapus.');
    }

    public function post(Request $request)
    {
        $id = $request->input('shineage_id');
        try {
            DB::beginTransaction();
            $shineage = shineage::findOrFail($id);
            $shineage->tanggal_publikasi = $request->input('status') == "true" ? now() : null;
            $shineage->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('shineages')->with('success', 'Data berhasil diterbitkan.');
    }
    
}

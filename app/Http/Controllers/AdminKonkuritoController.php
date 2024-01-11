<?php

namespace App\Http\Controllers;

use Log;
use App\Models\konkurito;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Updatekonkurito;
use App\Http\Requests\konkuritoRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatekonkuritoRequest;

class AdminKonkuritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konkuritos = Konkurito::all();
        
        foreach ($konkuritos as $konkurito) {
            $hargaRanges = [];
    
            // Assuming harga columns have a common prefix
            $columnPrefix = 'harga_';
    
            $min = null;
            $max = null;
    
            // Iterate over harga columns and compute overall range
            for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2I_' . $i . '_unit';
                $harga = $konkurito->{$columnName};  // Get the harga value for the current column
    
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
                $harga = $konkurito->{$columnName};  // Get the harga value for the current column
    
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
                $harga = $konkurito->{$columnName};  // Get the harga value for the current column
    
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

            $konkurito->harga_ranges = $hargaRanges;
        }

        return view('Pages/konkurito/list-konkuritos', ['konkuritos' => $konkuritos]);
    }

    
    public function view($id)
    {
        $konkurito = konkurito::findOrFail($id);
        return view('Pages/konkurito/detail-konkurito', ['konkurito'=>$konkurito]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages/konkurito/add-konkurito');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KonkuritoRequest $request)
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
           
            $konkurito = new konkurito;
            $konkurito->fill($validatedData);
            $konkurito->gambar_1 = $photoPaths[0] ?? null;
            $konkurito->gambar_2 = $photoPaths[1] ?? null;
            $konkurito->gambar_3 = $photoPaths[2] ?? null;
            $konkurito->gambar_4 = $photoPaths[3] ?? null;
            $konkurito->gambar_5 = $photoPaths[4] ?? null;
            if($request->tanggal_publikasi == "true"){
                $konkurito->tanggal_publikasi = now();
            }
            $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
            $konkurito->harga_jual_projek_ideally = $harga_jual_projek_ideally;
            // Harga_b2I_1+_unit
            $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
            $konkurito->harga_b2I_1_unit= $harga_b2I_1_unit;

            // Harga_b2I_11+_unit
            $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
            $konkurito->harga_b2I_11_unit = $harga_b2I_11_unit;

            // Harga_b2B_1+_unit
            $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
            $konkurito->harga_b2B_1_unit = $harga_b2B_1_unit;

            // Harga_b2B_11+_unit
            $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
            $konkurito->harga_b2B_11_unit = $harga_b2B_11_unit;
        
            // Harga_b2C_1+_unit
            $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
            $konkurito->harga_b2C_1_unit = $harga_b2C_1_unit;

            // Harga_b2C_11+_unit
            $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
            $konkurito->harga_b2C_11_unit = $harga_b2C_11_unit;

            $konkurito->slug =Str::slug($konkurito->nama_produk);
            $konkurito->created_by = auth()->user()->user_id;;
            $konkurito->save();
            DB::commit();
        } else {
            // Jika tidak ada gambar, tangani sesuai kebutuhan bisnis Anda
        }

    } catch (\Exception $e) {

        dd($e->getMessage());
        DB::rollback();
       return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
    }
    return redirect()->route('konkuritos')->with('success', 'Data has been successfully stored.');
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
        $konkurito = konkurito::findOrFail($id);
        return view('Pages/konkurito/edit-konkurito', ['konkurito'=>$konkurito]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKonkurito $request, $id)
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
                $konkurito = konkurito::findOrFail($id);
                $imagePathsFromDatabase = [
                    "gambar_1" => $konkurito->gambar_1,
                    "gambar_2" => $konkurito->gambar_2,
                    "gambar_3" => $konkurito->gambar_3,
                    "gambar_4" => $konkurito->gambar_4,
                    "gambar_5" => $konkurito->gambar_5,
                ];
                foreach ($imagePathsFromDatabase as $key => $imagePath) {
                    if ($imagePath !== null && !in_array($imagePath, $photoPaths)) {
                        // Hapus file dari penyimpanan
                        Storage::delete($imagePath);
                
                        // Set nilai $imagePath di database menjadi null
                        $imagePathsFromDatabase[$key] = null;
                    }
                }
                $konkurito->fill($validatedData);
                
                $konkurito->gambar_1 = $photoPaths[0] ?? null;
                $konkurito->gambar_2 = $photoPaths[1] ?? null;
                $konkurito->gambar_3 = $photoPaths[2] ?? null;
                $konkurito->gambar_4 = $photoPaths[3] ?? null;
                $konkurito->gambar_5 = $photoPaths[4] ?? null;
                if($request->tanggal_publikasi == "true"){
                    $konkurito->tanggal_publikasi = now();
                }else{
                    $konkurito->tanggal_publikasi = null;
                }
                $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
                $konkurito->harga_jual_projek_ideally = $harga_jual_projek_ideally;
                // Harga_b2I_1+_unit
                $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
                $konkurito->harga_b2I_1_unit= $harga_b2I_1_unit;
    
                // Harga_b2I_11+_unit
                $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
                $konkurito->harga_b2I_11_unit = $harga_b2I_11_unit;

                // Harga_b2B_1+_unit
                $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
                $konkurito->harga_b2B_1_unit = $harga_b2B_1_unit;
    
                // Harga_b2B_11+_unit
                $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
                $konkurito->harga_b2B_11_unit = $harga_b2B_11_unit;
    
                // Harga_b2C_1+_unit
                $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
                $konkurito->harga_b2C_1_unit = $harga_b2C_1_unit;
    
                // Harga_b2C_11+_unit
                $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
                $konkurito->harga_b2C_11_unit = $harga_b2C_11_unit;

                $konkurito->save();
                DB::commit();
            
    
        } catch (\Exception $e) {
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('konkuritos')->with('success', 'Data has been successfully stored.');
    }

    public function delete($id)
    {
        $konkurito = konkurito::findOrFail($id);
        return view('Pages/konkurito/delete-konkurito', ['konkurito'=>$konkurito]);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $konkurito = konkurito::findOrFail($id);

            $oldPath = $konkurito->gambar_1;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $konkurito->gambar_2;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $konkurito->gambar_3;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $konkurito->gambar_4;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $konkurito->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }

        return redirect()->route('konkuritos')->with('success', 'Data has been successfully deleted.');
    }

    public function post(Request $request)
    {
        $id = $request->input('konkurito_id');
        try {
            DB::beginTransaction();
            $konkurito = konkurito::findOrFail($id);
            $konkurito->tanggal_publikasi = $request->input('status') == "true" ? now() : null;
            $konkurito->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('konkuritos')->with('success', 'Data status has been successfully changed .');
    }
    
}

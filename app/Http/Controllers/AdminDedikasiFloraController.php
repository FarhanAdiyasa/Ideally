<?php

namespace App\Http\Controllers;

use Log;
use App\Models\dedikasiFlora;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdatededikasiFlora;
use App\Http\Requests\dedikasiFloraRequest;
use App\Http\Requests\UpdateDedikasiFloraRequest;
use App\Models\Dedikasi_Flora;
use Illuminate\Support\Facades\Storage;

class AdminDedikasiFloraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dedikasiFloras = Dedikasi_Flora::all();
        
        foreach ($dedikasiFloras as $agrigard) {
            $hargaRanges = [];
    
            // Assuming harga columns have a common prefix
            $columnPrefix = 'harga_';
    
            $min = null;
            $max = null;
    
            // Iterate over harga columns and compute overall range
            for ($i = 1; $i <= 31; $i+=10) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2I_' . $i . '_unit';
                $harga = $agrigard->{$columnName};  // Get the harga value for the current column
    
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
                $harga = $agrigard->{$columnName};  // Get the harga value for the current column
    
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
                $harga = $agrigard->{$columnName};  // Get the harga value for the current column
    
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

            $agrigard->harga_ranges = $hargaRanges;
        }
    
        return view('Pages/DedikasiFlora/list-dedikasiFlora', ['dedikasiFloras' => $dedikasiFloras, 'active'=>'DedikasiFlora']);
    }
    
    public function view($id)
    {
        $dedikasiFlora = Dedikasi_Flora::findOrFail($id);
        return view('Pages/DedikasiFlora/detail-dedikasiFlora', ['dedikasiFlora'=>$dedikasiFlora, 'active'=>'DedikasiFlora']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages/DedikasiFlora/add-dedikasiFlora', ['active'=>'DedikasiFlora']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DedikasiFloraRequest $request)
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
           
            $dedikasiFlora = new Dedikasi_Flora;
            $dedikasiFlora->fill($validatedData);
            $dedikasiFlora->gambar_1 = $photoPaths[0] ?? null;
            $dedikasiFlora->gambar_2 = $photoPaths[1] ?? null;
            $dedikasiFlora->gambar_3 = $photoPaths[2] ?? null;
            if($request->tanggal_publikasi == "true"){
                $dedikasiFlora->tanggal_publikasi = now();
            }
            $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
            $dedikasiFlora->harga_jual_projek_ideally = $harga_jual_projek_ideally;
            // Harga_b2I_1+_unit
            $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
            $dedikasiFlora->harga_b2I_1_unit= $harga_b2I_1_unit;

            // Harga_b2I_11+_unit
            $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
            $dedikasiFlora->harga_b2I_11_unit = $harga_b2I_11_unit;

            $harga_b2I_31_unit = str_replace(['.', ''], '', $request['harga_b2I_31_unit']);
            $dedikasiFlora->harga_b2I_31_unit = $harga_b2I_31_unit;


            // Harga_b2B_1+_unit
            $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
            $dedikasiFlora->harga_b2B_1_unit = $harga_b2B_1_unit;

            // Harga_b2B_11+_unit
            $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
            $dedikasiFlora->harga_b2B_11_unit = $harga_b2B_11_unit;

            $harga_b2B_31_unit = str_replace(['.', ''], '', $request['harga_b2B_31_unit']);
            $dedikasiFlora->harga_b2B_31_unit = $harga_b2B_31_unit;

            // Harga_b2C_1+_unit
            $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
            $dedikasiFlora->harga_b2C_1_unit = $harga_b2C_1_unit;

            // Harga_b2C_11+_unit
            $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
            $dedikasiFlora->harga_b2C_11_unit = $harga_b2C_11_unit;

            // Harga_b2C_31+_unit
            $harga_b2C_31_unit = str_replace(['.', ','], '', $request['harga_b2C_31_unit']);
            $dedikasiFlora->harga_b2C_31_unit = $harga_b2C_31_unit;

            $dedikasiFlora->warna_bunga =$request['warna_bunga_1'] ."-". $request['warna_bunga_2'];
            $dedikasiFlora->warna_daun =$request['warna_daun_1'] ."-". $request['warna_daun_2'];

            $dedikasiFlora->slug =Str::slug($dedikasiFlora->nama_latin);
            $dedikasiFlora->created_by = auth()->user()->user_id;;
            $dedikasiFlora->save();
            DB::commit();
        } else {
            // Jika tidak ada gambar, tangani sesuai kebutuhan bisnis Anda
        }

    } catch (\Exception $e) {
        dd($e->getMessage());
        DB::rollback();
       return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
    }
    return redirect()->route('dedikasiFloras')->with('success', 'Data has been successfully stored.');
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
        $dedikasiFlora = Dedikasi_Flora::findOrFail($id);
        list($warna_bunga_1, $warna_bunga_2) = explode('-', $dedikasiFlora->warna_bunga);
        list($warna_daun_1, $warna_daun_2) = explode('-', $dedikasiFlora->warna_daun);
        $active = 'DedikasiFlora';
        return view('Pages/DedikasiFlora/edit-dedikasiFlora',compact('dedikasiFlora', 'warna_bunga_1', 'warna_bunga_2','warna_daun_1', 'warna_daun_2', 'active'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDedikasiFloraRequest $request, $id)
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
                $dedikasiFlora = Dedikasi_Flora::findOrFail($id);
                $imagePathsFromDatabase = [
                    "gambar_1" => $dedikasiFlora->gambar_1,
                    "gambar_2" => $dedikasiFlora->gambar_2,
                    "gambar_3" => $dedikasiFlora->gambar_3,
                ];
                foreach ($imagePathsFromDatabase as $key => $imagePath) {
                    if ($imagePath !== null && !in_array($imagePath, $photoPaths)) {
                        // Hapus file dari penyimpanan
                        Storage::delete($imagePath);
                
                        // Set nilai $imagePath di database menjadi null
                        $imagePathsFromDatabase[$key] = null;
                    }
                }
                $dedikasiFlora->fill($validatedData);
                
                $dedikasiFlora->gambar_1 = $photoPaths[0] ?? null;
                $dedikasiFlora->gambar_2 = $photoPaths[1] ?? null;
                $dedikasiFlora->gambar_3 = $photoPaths[2] ?? null;
                if($request->tanggal_publikasi == "true"){
                    $dedikasiFlora->tanggal_publikasi = now();
                }else{
                    $dedikasiFlora->tanggal_publikasi = null;
                }
                $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
                $dedikasiFlora->harga_jual_projek_ideally = $harga_jual_projek_ideally;
                // Harga_b2I_1+_unit
                $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
                $dedikasiFlora->harga_b2I_1_unit= $harga_b2I_1_unit;
    
                // Harga_b2I_11+_unit
                $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
                $dedikasiFlora->harga_b2I_11_unit = $harga_b2I_11_unit;
    
                $harga_b2I_31_unit = str_replace(['.', ''], '', $request['harga_b2I_31_unit']);
                $dedikasiFlora->harga_b2I_31_unit = $harga_b2I_31_unit;

                // Harga_b2B_1+_unit
                $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
                $dedikasiFlora->harga_b2B_1_unit = $harga_b2B_1_unit;
    
                // Harga_b2B_11+_unit
                $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
                $dedikasiFlora->harga_b2B_11_unit = $harga_b2B_11_unit;
    
                $harga_b2B_31_unit = str_replace(['.', ''], '', $request['harga_b2B_31_unit']);
                $dedikasiFlora->harga_b2B_31_unit = $harga_b2B_31_unit;
    
                // Harga_b2C_1+_unit
                $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
                $dedikasiFlora->harga_b2C_1_unit = $harga_b2C_1_unit;
    
                // Harga_b2C_11+_unit
                $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
                $dedikasiFlora->harga_b2C_11_unit = $harga_b2C_11_unit;
    
                // Harga_b2C_31+_unit
                $harga_b2C_31_unit = str_replace(['.', ','], '', $request['harga_b2C_31_unit']);
                $dedikasiFlora->harga_b2C_31_unit = $harga_b2C_31_unit;

                $dedikasiFlora->save();
                DB::commit();
            
    
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('dedikasiFloras')->with('success', 'Data has been successfully stored.');
    }

    public function delete($id)
    {
        $dedikasiFlora = Dedikasi_Flora::findOrFail($id);
        return view('Pages/DedikasiFlora/delete-dedikasiFlora', ['dedikasiFlora'=>$dedikasiFlora, 'active'=>'DedikasiFlora']);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $dedikasiFlora = Dedikasi_Flora::findOrFail($id);

            $oldPath = $dedikasiFlora->gambar_1;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $dedikasiFlora->gambar_2;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $dedikasiFlora->gambar_3;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $dedikasiFlora->gambar_4;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $dedikasiFlora->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }

        return redirect()->route('dedikasiFloras')->with('success', 'Data has been successfully deleted.');
    }

    public function post(Request $request)
    {
        $id = $request->input('dedikasiFlora_id');
        try {
            DB::beginTransaction();
            $dedikasiFlora = Dedikasi_Flora::findOrFail($id);
            $dedikasiFlora->tanggal_publikasi = $request->input('status') == "true" ? now() : null;
            $dedikasiFlora->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('dedikasiFloras')->with('success', 'Data status has been successfully changed .');
    }
    
}

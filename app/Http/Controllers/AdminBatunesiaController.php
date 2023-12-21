<?php

namespace App\Http\Controllers;

use Log;
use App\Models\batunesia;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Updatebatunesia;
use App\Http\Requests\batunesiaRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateBatunesiaRequest;

class AdminBatunesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batunesias = batunesia::all();
        
        foreach ($batunesias as $batunesia) {
            $hargaRanges = [];
    
            // Assuming harga columns have a common prefix
            $columnPrefix = 'harga_';
    
            $min = null;
            $max = null;
    
            // Iterate over harga columns and compute overall range
            for ($i = 1; $i <= 3; $i++) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2I_' . $i . '_unit';
                $harga = $batunesia->{$columnName};  // Get the harga value for the current column
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
            }
    
            // Add the computed range to the batunesia object
            $hargaRanges[] = $min !== null && $max !== null ? $min . ' - ' . $max : 'No data';
    
            // Add the computed ranges to the batunesia object
            $batunesia->harga_ranges = $hargaRanges;
        }
    
        return view('Pages/Batunesia/list-batunesia', ['batunesias' => $batunesias]);
    }
    
    public function view($id)
    {
        $batunesia = batunesia::findOrFail($id);
        return view('Pages/Batunesia/detail-batunesia', ['batunesia'=>$batunesia]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages/Batunesia/add-batunesia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BatunesiaRequest $request)
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
           
            $batunesia = new batunesia;
            $batunesia->fill($validatedData);
            $batunesia->gambar_1 = $photoPaths[0] ?? null;
            $batunesia->gambar_2 = $photoPaths[1] ?? null;
            $batunesia->gambar_3 = $photoPaths[2] ?? null;
            if($request->tanggal_publikasi == "true"){
                $batunesia->tanggal_publikasi = now();
            }
            $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
            $batunesia->harga_jual_projek_ideally = $harga_jual_projek_ideally;
            // Harga_b2I_1+_unit
            $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
            $batunesia->harga_b2I_1_unit= $harga_b2I_1_unit;

            // Harga_b2I_11+_unit
            $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
            $batunesia->harga_b2I_11_unit = $harga_b2I_11_unit;

            $harga_b2I_31_unit = str_replace(['.', ''], '', $request['harga_b2I_31_unit']);
            $batunesia->harga_b2I_31_unit = $harga_b2I_31_unit;


            // Harga_b2B_1+_unit
            $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
            $batunesia->harga_b2B_1_unit = $harga_b2B_1_unit;

            // Harga_b2B_11+_unit
            $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
            $batunesia->harga_b2B_11_unit = $harga_b2B_11_unit;

            $harga_b2B_31_unit = str_replace(['.', ''], '', $request['harga_b2B_31_unit']);
            $batunesia->harga_b2B_31_unit = $harga_b2B_31_unit;

            // Harga_b2C_1+_unit
            $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
            $batunesia->harga_b2C_1_unit = $harga_b2C_1_unit;

            // Harga_b2C_11+_unit
            $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
            $batunesia->harga_b2C_11_unit = $harga_b2C_11_unit;

            // Harga_b2C_31+_unit
            $harga_b2C_31_unit = str_replace(['.', ','], '', $request['harga_b2C_31_unit']);
            $batunesia->harga_b2C_31_unit = $harga_b2C_31_unit;

            $batunesia->slug =Str::slug($batunesia->nama_produk);
            $batunesia->created_by = 1;
            $batunesia->save();
            DB::commit();
        } else {
            // Jika tidak ada gambar, tangani sesuai kebutuhan bisnis Anda
        }

    } catch (\Exception $e) {
        DB::rollback();
       return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
    }
    return redirect()->route('batunesias')->with('success', 'Data has been successfully stored.');
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
        $batunesia = batunesia::findOrFail($id);
        return view('Pages/Batunesia/edit-batunesia', ['batunesia'=>$batunesia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBatunesiaRequest $request, $id)
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
                $batunesia = batunesia::findOrFail($id);
                $imagePathsFromDatabase = [
                    "gambar_1" => $batunesia->gambar_1,
                    "gambar_2" => $batunesia->gambar_2,
                    "gambar_3" => $batunesia->gambar_3,
                ];
                foreach ($imagePathsFromDatabase as $key => $imagePath) {
                    if ($imagePath !== null && !in_array($imagePath, $photoPaths)) {
                        // Hapus file dari penyimpanan
                        Storage::delete($imagePath);
                
                        // Set nilai $imagePath di database menjadi null
                        $imagePathsFromDatabase[$key] = null;
                    }
                }
                $batunesia->fill($validatedData);
                
                $batunesia->gambar_1 = $photoPaths[0] ?? null;
                $batunesia->gambar_2 = $photoPaths[1] ?? null;
                $batunesia->gambar_3 = $photoPaths[2] ?? null;
                if($request->tanggal_publikasi == "true"){
                    $batunesia->tanggal_publikasi = now();
                }
                $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
                $batunesia->harga_jual_projek_ideally = $harga_jual_projek_ideally;
                // Harga_b2I_1+_unit
                $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
                $batunesia->harga_b2I_1_unit= $harga_b2I_1_unit;
    
                // Harga_b2I_11+_unit
                $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
                $batunesia->harga_b2I_11_unit = $harga_b2I_11_unit;
    
                $harga_b2I_31_unit = str_replace(['.', ''], '', $request['harga_b2I_31_unit']);
                $batunesia->harga_b2I_31_unit = $harga_b2I_31_unit;

                // Harga_b2B_1+_unit
                $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
                $batunesia->harga_b2B_1_unit = $harga_b2B_1_unit;
    
                // Harga_b2B_11+_unit
                $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
                $batunesia->harga_b2B_11_unit = $harga_b2B_11_unit;
    
                $harga_b2B_31_unit = str_replace(['.', ''], '', $request['harga_b2B_31_unit']);
                $batunesia->harga_b2B_31_unit = $harga_b2B_31_unit;
    
                // Harga_b2C_1+_unit
                $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
                $batunesia->harga_b2C_1_unit = $harga_b2C_1_unit;
    
                // Harga_b2C_11+_unit
                $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
                $batunesia->harga_b2C_11_unit = $harga_b2C_11_unit;
    
                // Harga_b2C_31+_unit
                $harga_b2C_31_unit = str_replace(['.', ','], '', $request['harga_b2C_31_unit']);
                $batunesia->harga_b2C_31_unit = $harga_b2C_31_unit;

                $batunesia->save();
                DB::commit();
            
    
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('batunesias')->with('success', 'Data has been successfully stored.');
    }

    public function delete($id)
    {
        $batunesia = batunesia::findOrFail($id);
        return view('Pages/Batunesia/delete-batunesia', ['batunesia'=>$batunesia]);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $batunesia = batunesia::findOrFail($id);

            $oldPath = $batunesia->gambar_1;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $batunesia->gambar_2;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $batunesia->gambar_3;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $batunesia->gambar_4;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $batunesia->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }

        return redirect()->route('batunesias')->with('success', 'Data has been successfully deleted.');
    }

    public function post(Request $request)
    {
        $id = $request->input('batunesia_id');
        try {
            DB::beginTransaction();
            $batunesia = batunesia::findOrFail($id);
            $batunesia->tanggal_publikasi = $request->input('status') == "true" ? now() : null;
            $batunesia->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('batunesias')->with('success', 'Data status has been successfully changed .');
    }
    
}

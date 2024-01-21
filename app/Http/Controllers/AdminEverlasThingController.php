<?php

namespace App\Http\Controllers;

use Log;
use App\Models\everlasThing;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateeverlasThing;
use App\Http\Requests\everlasThingRequest;
use App\Http\Requests\UpdateEverlasThingRequest;
use App\Models\Everlas_Things;
use Illuminate\Support\Facades\Storage;

class AdminEverlasThingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $everlasThings = Everlas_Things::all();
        
        foreach ($everlasThings as $everlasThing) {
            $hargaRanges = [];
    
            // Assuming harga columns have a common prefix
            $columnPrefix = 'harga_';
    
            $min = null;
            $max = null;
    
            // Iterate over harga columns and compute overall range
            for ($i = 1; $i <= 3; $i++) {  // Assuming 3 levels: b2I, b2B, b2C
                $columnName = $columnPrefix . 'b2I_' . $i . '_unit';
                $harga = $everlasThing->{$columnName};  // Get the harga value for the current column
    
                if ($harga !== null) {
                    if ($min === null || $harga < $min) {
                        $min = $harga;
                    }
    
                    if ($max === null || $harga > $max) {
                        $max = $harga;
                    }
                }
            }
    
            // Add the computed range to the everlasThing object
            $hargaRanges[] = $min !== null && $max !== null ? $min . ' - ' . $max : 'No data';
    
            // Add the computed ranges to the everlasThing object
            $everlasThing->harga_ranges = $hargaRanges;
        }
    
        return view('Pages/EverlasThing/list-everlasThing', ['everlasThings' => $everlasThings]);
    }
    
    public function view($id)
    {
        $everlasThing = Everlas_Things::findOrFail($id);
        return view('Pages/EverlasThing/detail-everlasThing', ['everlasThing'=>$everlasThing]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages/EverlasThing/add-everlasThing');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EverlasThingRequest $request)
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
           
            $everlasThing = new Everlas_Things;
            $everlasThing->fill($validatedData);
            $everlasThing->gambar_1 = $photoPaths[0] ?? null;
            $everlasThing->gambar_2 = $photoPaths[1] ?? null;
            $everlasThing->gambar_3 = $photoPaths[2] ?? null;
            $everlasThing->gambar_4 = $photoPaths[3] ?? null;
            $everlasThing->gambar_5 = $photoPaths[4] ?? null;
            $everlasThing->gambar_6 = $photoPaths[5] ?? null;
            if($request->tanggal_publikasi == "true"){
                $everlasThing->tanggal_publikasi = now();
            }
            $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
            $everlasThing->harga_jual_projek_ideally = $harga_jual_projek_ideally;
            // Harga_b2I_1+_unit
            $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
            $everlasThing->harga_b2I_1_unit= $harga_b2I_1_unit;

            // Harga_b2I_11+_unit
            $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
            $everlasThing->harga_b2I_11_unit = $harga_b2I_11_unit;


            // Harga_b2B_1+_unit
            $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
            $everlasThing->harga_b2B_1_unit = $harga_b2B_1_unit;

            // Harga_b2B_11+_unit
            $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
            $everlasThing->harga_b2B_11_unit = $harga_b2B_11_unit;

            // Harga_b2C_1+_unit
            $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
            $everlasThing->harga_b2C_1_unit = $harga_b2C_1_unit;

            // Harga_b2C_11+_unit
            $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
            $everlasThing->harga_b2C_11_unit = $harga_b2C_11_unit;

            $everlasThing->slug =Str::slug($everlasThing->nama_produk);
            $everlasThing->created_by = auth()->user()->user_id;;
            $everlasThing->save();
            DB::commit();
        } else {
            // Jika tidak ada gambar, tangani sesuai kebutuhan bisnis Anda
        }

    } catch (\Exception $e) {
        dd($e->getMessage());
        DB::rollback();
       return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
    }
    return redirect()->route('everlasThings')->with('success', 'Data berhasil disimpan!');
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
        $everlasThing = Everlas_Things::findOrFail($id);
        return view('Pages/EverlasThing/edit-everlasThing', ['everlasThing'=>$everlasThing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEverlasThingRequest $request, $id)
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
                $everlasThing = Everlas_Things::findOrFail($id);
                $imagePathsFromDatabase = [
                    "gambar_1" => $everlasThing->gambar_1,
                    "gambar_2" => $everlasThing->gambar_2,
                    "gambar_3" => $everlasThing->gambar_3,
                    "gambar_4" => $everlasThing->gambar_4,
                    "gambar_5" => $everlasThing->gambar_5,
                    "gambar_6" => $everlasThing->gambar_6,
                ];
                foreach ($imagePathsFromDatabase as $key => $imagePath) {
                    if ($imagePath !== null && !in_array($imagePath, $photoPaths)) {
                        // Hapus file dari penyimpanan
                        Storage::delete($imagePath);
                
                        // Set nilai $imagePath di database menjadi null
                        $imagePathsFromDatabase[$key] = null;
                    }
                }
                $everlasThing->fill($validatedData);
                
                $everlasThing->gambar_1 = $photoPaths[0] ?? null;
                $everlasThing->gambar_2 = $photoPaths[1] ?? null;
                $everlasThing->gambar_3 = $photoPaths[2] ?? null;
                $everlasThing->gambar_4 = $photoPaths[3] ?? null;
                $everlasThing->gambar_5 = $photoPaths[4] ?? null;
                $everlasThing->gambar_6 = $photoPaths[5] ?? null;
                if($request->tanggal_publikasi == "true"){
                    $everlasThing->tanggal_publikasi = now();
                }
                $harga_jual_projek_ideally = str_replace(['.', ''], '', $request['harga_jual_projek_ideally']);
                $everlasThing->harga_jual_projek_ideally = $harga_jual_projek_ideally;
                // Harga_b2I_1+_unit
                $harga_b2I_1_unit = str_replace(['.', ''], '', $request['harga_b2I_1_unit']);
                $everlasThing->harga_b2I_1_unit= $harga_b2I_1_unit;
    
                // Harga_b2I_11+_unit
                $harga_b2I_11_unit = str_replace(['.', ''], '', $request['harga_b2I_11_unit']);
                $everlasThing->harga_b2I_11_unit = $harga_b2I_11_unit;

                // Harga_b2B_1+_unit
                $harga_b2B_1_unit = str_replace(['.', ''], '', $request['harga_b2B_1_unit']);
                $everlasThing->harga_b2B_1_unit = $harga_b2B_1_unit;
    
                // Harga_b2B_11+_unit
                $harga_b2B_11_unit = str_replace(['.', ''], '', $request['harga_b2B_11_unit']);
                $everlasThing->harga_b2B_11_unit = $harga_b2B_11_unit;
    
                // Harga_b2C_1+_unit
                $harga_b2C_1_unit = str_replace(['.', ''], '', $request['harga_b2C_1_unit']);
                $everlasThing->harga_b2C_1_unit = $harga_b2C_1_unit;
    
                // Harga_b2C_11+_unit
                $harga_b2C_11_unit = str_replace(['.', ''], '', $request['harga_b2C_11_unit']);
                $everlasThing->harga_b2C_11_unit = $harga_b2C_11_unit;

                $everlasThing->save();
                DB::commit();
            
    
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
           return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('everlasThings')->with('success', 'Data berhasil disimpan!');
    }

    public function delete($id)
    {
        $everlasThing = Everlas_Things::findOrFail($id);
        return view('Pages/EverlasThing/delete-everlasThing', ['everlasThing'=>$everlasThing]);
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $everlasThing = Everlas_Things::findOrFail($id);

            $oldPath = $everlasThing->gambar_1;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $everlasThing->gambar_2;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $everlasThing->gambar_3;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $oldPath = $everlasThing->gambar_4;
            if ($oldPath !== null && $oldPath !== '') {
                Storage::delete($oldPath);
            }

            $everlasThing->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }

        return redirect()->route('everlasThings')->with('success', 'Data berhasil dihapus!');
    }

    public function post(Request $request)
    {
        $id = $request->input('everlasThing_id');
        try {
            DB::beginTransaction();
            $everlasThing = Everlas_Things::findOrFail($id);
            $everlasThing->tanggal_publikasi = $request->input('status') == "true" ? now() : null;
            $everlasThing->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi nanti.');
        }
        return redirect()->route('everlasThings')->with('success', 'Status data berhasil diubah!');
    }
    
}

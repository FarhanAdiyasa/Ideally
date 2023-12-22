<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dedikasi_Flora;

class DefloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dedikasiFloras = Dedikasi_Flora::inRandomOrder()->take(8)->get();
        $deflos = Dedikasi_Flora::inRandomOrder()->take(5)->get();
        $deflos2 = Dedikasi_Flora::inRandomOrder()->take(5)->get();
        return view('DedikasiFloras.index', compact('dedikasiFloras', 'deflos', 'deflos2'));
    }

    public function showcase()
    {
        $defloShowcase = Dedikasi_Flora::paginate(20);
        return view('DedikasiFloras.showcase', compact('defloShowcase'));
    }

    public function showcase2(Request $request)
    {
        $defloShowcase = Dedikasi_Flora::when($request->filled('strata'), function ($query) use ($request) {
            return $query->where('strata', $request->input('strata'));
        })
            ->when($request->filled('warna_daun'), function ($query) use ($request) {
                return $query->where('warna_daun', $request->input('warna_daun'));
            })
            ->when($request->filled('warna_bunga'), function ($query) use ($request) {
                return $query->where('warna_bunga', $request->input('warna_bunga'));
            })
            ->paginate(20);

        return view('DedikasiFloras.showcase', compact('defloShowcase'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id_nurseri)
    {
        $defloterkait = Dedikasi_Flora::inRandomOrder()->take(5)->get();
        $defloterkait2 = Dedikasi_Flora::inRandomOrder()->take(5)->get();
        $deflorekomendasi = Dedikasi_Flora::inRandomOrder()->take(5)->get();
        $deflorekomendasi2 = Dedikasi_Flora::inRandomOrder()->take(5)->get();
        $deflodicari = Dedikasi_Flora::inRandomOrder()->take(5)->get();
        $deflodicari2 = Dedikasi_Flora::inRandomOrder()->take(5)->get();
        $defloDetail = Dedikasi_Flora::findOrFail($id_nurseri);
        $maxId = Dedikasi_Flora::max('id_nurseri');
        return view('DedikasiFloras.details',
            compact('defloDetail', 'maxId', 'defloterkait', 'defloterkait2', 'deflorekomendasi',
                'deflorekomendasi2', 'deflodicari', 'deflodicari2'));
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

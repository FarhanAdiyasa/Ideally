<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konkurito;

class KonkuritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('konkuritos.index');
    }

    public function showcase()
    {
        $konkuritoshowcase = Konkurito::where('stok', '>', 0)->get();
        return view('konkuritos.showcase', compact('konkuritoshowcase'));
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
    public function show($id_konkurito)
    {
        $konkuritoDetail = Konkurito::findOrFail($id_konkurito);
        $konkuritoterkait = Konkurito::where('stok', '>', 0)->where('id_konkurito', '!=', $konkuritoDetail->id_konkurito)->inRandomOrder()->take(20)->get();
        $konkuritolainnya = Konkurito::where('stok', '>', 0)
            ->where('id_konkurito', '!=', $konkuritoDetail->id_konkurito)->inRandomOrder()->take(20)->get();
        $konkuritopopuler = Konkurito::where('stok', '>', 0)
            ->where('id_konkurito', '!=', $konkuritoDetail->id_konkurito)->inRandomOrder()->take(20)->get();   
        return view('konkuritos.details', compact('konkuritoDetail', 'konkuritoterkait', 'konkuritolainnya', 'konkuritopopuler'));
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

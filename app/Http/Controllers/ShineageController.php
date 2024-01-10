<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shineage;

class ShineageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexBrand()
    {
        $shineages = Shineage::where('stok', '>', 0)->inRandomOrder()->take(14)->get();
        return view('shineages.index', compact('shineages'));
    }

    public function showcase()
    {
        $shineages = Shineage::where('stok', '>', 0)->get();
        return view('shineages.showcase', compact('shineages'));
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
    public function show($id_shineage)
    {
        $shineages = Shineage::findOrFail($id_shineage);
        $shineageterkait = Shineage::where('stok', '>', 0)->inRandomOrder()->take(9)->get();
        return view('shineages.details', compact('shineages', 'shineageterkait'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batunesia;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batunesias = Batunesia::paginate(4);
        return view ('Detail-Batunesia',['batunesias' => $batunesias]);
    }

    public function showDetail($id_batu)
    {
        $batunesias1 = Batunesia::inRandomOrder()->paginate(4);
        $batunesias2 = Batunesia::inRandomOrder()->paginate(4);
        $batunesias3 = Batunesia::inRandomOrder()->paginate(4); 
        $selectedProduct = Batunesia::findOrFail($id_batu);
    
        return view('Detail-Batunesia', compact('selectedProduct', 'id_batu', 'batunesias1', 'batunesias2', 'batunesias3'));
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
    public function show(string $id)
    {

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

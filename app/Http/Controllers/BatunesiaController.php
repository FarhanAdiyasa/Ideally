<?php

namespace App\Http\Controllers;

use App\Models\Batunesia;
use Illuminate\Http\Request;

class BatunesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batunesias = Batunesia::paginate(24); // Meminta paginasi langsung dari model
        return view('brand-batunesia.showcase_batunesia_store', ['batunesias' => $batunesias]);
    }

    public function filterByWhite()
    {
        $batunesias = Batunesia::where('warna', 'white')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByCream()
    {
        $batunesias = Batunesia::where('warna', 'cream')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBlack()
    {
        $batunesias = Batunesia::where('warna', 'black')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByGrey()
    {
        $batunesias = Batunesia::where('warna', 'grey')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }
    
    public function filterByBrown()
    {
        $batunesias = Batunesia::where('warna', 'brown')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByPancawarna()
    {
        $batunesias = Batunesia::where('warna', 'pancawarna')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBatuHampar()
    {
        $batunesias = Batunesia::where('kategori', 'Batu Hampar')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBatuTempel()
    {
        $batunesias = Batunesia::where('kategori', 'Batu Tempel')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBatuHias()
    {
        $batunesias = Batunesia::where('kategori', 'Batu Hias')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByOrnamenBatu()
    {
        $batunesias = Batunesia::where('kategori', 'Ornamen Batu')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByPotBatu()
    {
        $batunesias = Batunesia::where('kategori', 'Pot Batu')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
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
        //
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

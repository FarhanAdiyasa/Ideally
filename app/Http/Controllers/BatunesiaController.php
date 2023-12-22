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
        $batunesias = Batunesia::paginate(28); // Meminta paginasi langsung dari model
        return view('brand-batunesia.showcase_batunesia_store', ['batunesias' => $batunesias]);
    }

    public function showProduct($id)
    {
        $product = Batunesia::find($id);
        return view('showcase', ['product' => $product]);
    }

    // public function filterByWhite()
    // {
    //     $batunesias = Batunesia::where('warna', 'white')->paginate(28);
    //     $batunesias = Batunesia::paginate(24); // Meminta paginasi langsung dari model
    //     return view('brand-batunesia.showcase_batunesia_store', ['batunesias' => $batunesias]);
    // }

    public function filterByWhite()
    {
        $batunesias = Batunesia::where('warna_1', 'white')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByCream()
    {
$batunesias = Batunesia::where('warna_1', 'cream')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBlack()
    {
 $batunesias = Batunesia::where('warna_1', 'black')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByGrey()
    {
 $batunesias = Batunesia::where('warna_1', 'grey')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }
    
    public function filterByBrown()
    {
        $batunesias = Batunesia::where('warna_1', 'brown')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByPancawarna()
    {
        $batunesias = Batunesia::where('warna_1', 'pancawarna')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBatuHampar()
    {
        $batunesias = Batunesia::where('kategori', 'Batu Hampar')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBatuTempel()
    {
        $batunesias = Batunesia::where('kategori', 'Batu Tempel')->paginate(28);
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
        $batunesias = Batunesia::where('kategori', 'Pot Batu')->paginate(28);
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
        // Fetch the product details based on the ID
        $batunesias = Batunesia::find($id);

        // Pass the product details to the view
         return view('brand-batunesia.showcase_batunesia_store', ['batunesia' => $batunesias]);
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

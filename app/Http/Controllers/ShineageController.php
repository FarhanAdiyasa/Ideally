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

    public function tambahKeKeranjang($id_shineage, $quantity)
{
    // Pastikan $quantity tidak nol atau negatif
    if ((int)$quantity <= 0) {
        return redirect()->route('transaksi.index')->with('error', 'Jumlah tidak valid.');
    }

    $product = Shineage::findOrFail($id_shineage);
    
    $cart = session()->get('cart_shineage', []);

    if (isset($cart[$id_shineage])) {
        $currentQuantity = $cart[$id_shineage]['quantity'];
        $cart[$id_shineage]['quantity'] = $currentQuantity + (int)$quantity;
    } else {
        $cart[$id_shineage] = [
            "produk" => $product,
            "quantity" => (int)$quantity
        ];
    }

    session()->put('cart_shineage', $cart);
    return redirect()->route('transaksi.index');
}

    


    public function updateShineage(Request $request)
    {
        if($request->id_shineage && $request->quantity){
            $cart = session()->get('cart_shineage');
            $cart[$request->id_shineage]["quantity"] = $request->quantity;
            session()->put('cart_shineage', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function removeShineage(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart_shineage');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart_shineage', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function removeAllShineage()
    {
        session()->forget('cart_shineage');
        session()->flash('success', 'Semua produk Shineage berhasil dihapus dari keranjang!');
        return response()->json(['success' => true], 200); // Memberikan respon ke AJAX
    }
}

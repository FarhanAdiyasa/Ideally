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
        $konkuritoterkait = Konkurito::where('stok', '>', 0)->inRandomOrder()->take(4)->get();
        return view('konkuritos.details', compact('konkuritoDetail', 'konkuritoterkait'));
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

    public function tambahKeKeranjang($id_konkurito, $quantity)
    {
        // Pastikan $quantity tidak nol atau negatif
        if ((int)$quantity <= 0) {
            return redirect()->route('transaksi.index')->with('error', 'Jumlah tidak valid.');
        }
    
        $product = Konkurito::findOrFail($id_konkurito);
        
        $cart = session()->get('cart_konkurito', []);
    
        if (isset($cart[$id_konkurito])) {
            $currentQuantity = $cart[$id_konkurito]['quantity'];
            $cart[$id_konkurito]['quantity'] = $currentQuantity + (int)$quantity;
        } else {
            $cart[$id_konkurito] = [
                "produk" => $product,
                "quantity" => (int)$quantity
            ];
        }
    
        session()->put('cart_konkurito', $cart);
        return redirect()->route('transaksi.index');
    }
}

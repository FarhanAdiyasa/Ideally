<?php

namespace App\Http\Controllers;

use App\Models\Agrigard;
use App\Models\Batunesia;
use App\Models\Dedikasi_Flora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;


class TransaksiController extends Controller
{

    public function index()
    {
        $krj_agrigard = Session::get('cart_agrigard', []);
        $krj_deflo = Session::get('cart_deflo', []);
        $krj_batunesia = Session::get('cart_batunesia', []);
        return view('transaksi.keranjang', compact('krj_deflo', 'krj_batunesia', 'krj_agrigard'));
    }

    public function tambahKeKeranjang($id_batu)
    {
        $product = Batunesia::findOrFail($id_batu);
        $cart = session()->get('cart_batunesia', []);
        if (isset($cart[$id_batu])) {
            $cart[$id_batu]['quantity']++;
        } else {
            $cart[$id_batu] = [
                'produk' => $product,
                'quantity' => 1
            ];
        }
        session()->put('cart_batunesia', $cart);

        $krj_deflo = Session::get('cart_deflo', []);
        $krj_batunesia = Session::get('cart_batunesia', []);
        return view('transaksi.keranjang', compact('krj_deflo', 'krj_batunesia'));
    }
    
    public function add_cart_deflo($id, $qty) {
        $product = Dedikasi_Flora::findOrFail($id);
        $cart = session()->get('cart_deflo', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $qty;
        } else {
            $cart[$id] = [
                'produk' => $product,
                'quantity' => $qty,
            ];
        }
        session()->put('cart_deflo', $cart);
        return view('transaksi.keranjang');
    }

    public function add_cart_agrigard($id, $qty) {
        $product = Agrigard::findOrFail($id);
        $cart = session()->get('cart_agrigard', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $qty;
        } else {
            $cart[$id] = [
                'produk' => $product,
                'quantity' => $qty,
            ];
        }
        session()->put('cart_agrigard', $cart);
        return view('transaksi.keranjang');
    }

    public function calculateOngkir(Request $request)
    {
        $responseCost = Http::withHeaders([
            'key' => 'c6f5a244812b5c983cbd2810dcfbe62b'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => $request->origin,
            'destination' => $request->destination,
            'weight' => $request->weight,
            'courier' => $request->courier,
        ]);

        $ongkir = $responseCost->json()['rajaongkir']['results'];
        return view('transaksi.keranjang', compact('ongkir'));
    }
}
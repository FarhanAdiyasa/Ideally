<?php

namespace App\Http\Controllers;

use App\Models\Agrigard;
use App\Models\Batunesia;
use App\Models\Dedikasi_Flora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class TransaksiController extends Controller
{

    public function index()
    {
        return view('transaksi.keranjang');
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

    private function getUserDstID() {
        if (Auth::check()) {
            $user = Auth::user(); 
            $id = $user->kabupaten;
    
            $filejson = substr($id, 0, 2);
            $url = "https://ibnux.github.io/data-indonesia/kabupaten/{$filejson}.json";
    
            $response = Http::get($url);
    
            if ($response->ok()) {
                $data = collect($response->json());
                $nama = $data->firstWhere('id', $id)['nama'] ?? '';
    
                $type = Str::contains(Str::lower($nama), 'kab') ? 'Kabupaten' : 'Kota';
                $nama = substr(Str::lower($nama), 5);
    
                $rajaongkirResponse = Http::withHeaders([
                    'key' => 'c6f5a244812b5c983cbd2810dcfbe62b'
                ])->get('https://api.rajaongkir.com/starter/city');
    
                if ($rajaongkirResponse->ok()) {
                    $rajaongkir = collect($rajaongkirResponse->json()['rajaongkir']['results']);
                
                    return $rajaongkir->first(function ($obj) use ($nama, $type) {
                        return $obj['type'] == $type && Str::contains(Str::lower($obj['city_name']), $nama);
                    })['city_id'] ?? null;
                }
            }
        }
        return null;
    }
    

    public function calculateOngkir(Request $request)
    {
        $dstUser = $this->getUserDstID();

        if ($dstUser !== null) {
            $responseCost = Http::withHeaders([
                'key' => 'c6f5a244812b5c983cbd2810dcfbe62b'
            ])->post('https://api.rajaongkir.com/starter/cost', [
                'origin' => $request->origin,
                'destination' => $dstUser,
                'weight' => $request->weight,
                'courier' => $request->courier,
            ]);
    
            
            $ongkir = $responseCost->json()['rajaongkir']['results'];
            return view('transaksi.keranjang', compact('ongkir'));
        }
        
        return view('transaksi.keranjang')->with('error', 'complete profile');
    }
}
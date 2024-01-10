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
            $user = Auth::user(); // Ganti dengan id kabupaten dari tabel Anda
            $id = $user->kabupaten;
            $filejson = substr($id, 0, 2);
            $url = "https://ibnux.github.io/data-indonesia/kabupaten/{$filejson}.json";
            $nama = '';
            $type = '';

            $response = Http::get($url);

            if ($response->ok()) {
                $data = $response->json();

                foreach($data as $obj) {
                    if ($obj['id'] == $id){
                        $nama = Str::lower($obj['nama']);
                    }
                }

                Str::contains(Str::lower($nama), 'kab') ? $type = 'Kabupaten' : $type = 'Kota';
                $nama = substr($nama, 5);
                // dd($nama, $type);
                
                $response = Http::withHeaders([
                    'key' => 'c6f5a244812b5c983cbd2810dcfbe62b'
                ])->get('https://api.rajaongkir.com/starter/city');
                $rajaongkir = $response->json()['rajaongkir']['results'];

                foreach($rajaongkir as $obj) {
                    $city_name = Str::lower($obj['city_name']);
                    if ($obj['type'] == $type && Str::contains($city_name, $nama)) {
                        return $obj['city_id'];
                    }
                }
            }
                
            return null;
            
        }
    }

    public function calculateOngkir(Request $request)
    {
        // $response = Http::withHeaders([
        //     'key' => 'c6f5a244812b5c983cbd2810dcfbe62b'
        // ])->get('https://api.rajaongkir.com/starter/province');
        // dd($response->json());
        
        // $response2 = Http::withHeaders([
        //     'key' => 'c6f5a244812b5c983cbd2810dcfbe62b'
        // ])->get('https://api.rajaongkir.com/starter/city');
        // dd($response2->json());

        $dstUser = $this->getUserDstID();

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
}
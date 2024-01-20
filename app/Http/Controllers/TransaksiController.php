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
use Illuminate\Support\Arr;


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

    public function update($cartName, $id, $qty) {
        $cart = session()->get($cartName);
        $cart[$id]['quantity'] = $qty;
        session()->put($cartName, $cart);

        return redirect()->route('transaksi.index');
    }

    public function remove($cartName, $id){
        $cart = session()->get($cartName);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put($cartName, $cart);
        }

        return redirect()->route('transaksi.index');
    }

    public function remove_all($cartName){
        session()->forget($cartName);

        return redirect()->route('transaksi.index');
    }

    private function getUserDstID() {
        if (Auth::check()) {
            $user = Auth::user(); 
            $id = $user->kabupaten;

            if ($id == null) {
                return null;
            }
    
            $filejson = substr($id, 0, 2);
            $url = "https://ibnux.github.io/data-indonesia/kabupaten/{$filejson}.json";
    
            $response = Http::get($url);
    
            if ($response->ok()) {
                $data = collect($response->json());
                $nama = $data->firstWhere('id', $id)['nama'] ?? '';
    
                $type = Str::contains(Str::lower($nama), 'kab') ? 'Kabupaten' : 'Kota';
                $nama = substr(Str::lower($nama), 5);
    
                $rajaongkirResponse = Http::withHeaders([
                    'key' => config('ongkir.rajaongkir')
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
                'key' => config('ongkir.rajaongkir')
            ])->post('https://api.rajaongkir.com/starter/cost', [
                'origin' => $request->origin,
                'destination' => $dstUser,
                'weight' => $request->weight,
                'courier' => $request->courier,
            ]);

            // eror request
            $status = $responseCost->json()['rajaongkir']['status'];
            if ($status['code'] != 200) {
                return view('transaksi.keranjang')->withErrors(['error' => $status['description']]);
            }

            $result = $responseCost->json()['rajaongkir']['results'][0]['costs'];

            $ongkirData = Arr::first($result, function ($cost) {
                return $cost['service'] == 'REG';
            });

            $ongkir = $ongkirData['cost'][0]['value'];
            session()->put('ongkir', $ongkir);
            
            return view('transaksi.keranjang', compact('ongkir'));
        }
        
        return view('transaksi.keranjang')->withErrors(['error' => 'Please complete your profile or Log In.']);
    }
}
<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Batunesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
=======
use App\Models\Agrigard;
use App\Models\Batunesia;
use App\Models\Dedikasi_Flora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590


class TransaksiController extends Controller
{
<<<<<<< HEAD
 
    public function index()
{
    $keranjang = Session::get('keranjang', []);

    return view('transaksi.keranjang', compact('keranjang'));
}



    

    public function cart()
    {
        return view('transaksi.keranjang');
    }

    public function tambahKeKeranjang($id_batu)
    {

        $product = Batunesia::findOrFail($id_batu);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id_batu])) {
            $cart[$id_batu]['quantity']++;
        }  else {
            $cart[$id_batu] = [
                "produk" => $product,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);

        // $selectedProduct = Batunesia::findOrFail($id_batu);
        // $keranjang = Session::get('keranjang', []);

        // $keranjangKey = 'produk_' . $selectedProduct->id;

        
        // // Pengecekan apakah produk sudah ada di keranjang berdasarkan id produk
        // $existingProduct = array_filter($keranjang, function ($item) use ($selectedProduct) {
        //     return $item['produk']->id == $selectedProduct->id;
        // });
        
        // // Jika produk sudah ada, tambahkan jumlahnya
        // if (!empty($existingProduct)) {
        //     $existingProductKey = key($existingProduct);
        //     dump($existingProductKey);
        //     dump($existingProduct[$existingProductKey]['produk']->id);
        //     $keranjang[$existingProductKey]['jumlah']++;
        // } else {
        //     // Jika produk belum ada di keranjang, tambahkan produk baru
        //     $newProduct = [
        //         'produk' => $selectedProduct,
        //         'jumlah' => 1,
        //     ];

        //     // Tambahkan produk baru ke keranjang
        //     $keranjang[$keranjangKey] = $newProduct;
        // }
        
        // Session::put('keranjang', $keranjang);
        
        $keranjang = Session::get('cart', []);
        
        return view('transaksi.keranjang', compact('keranjang'));
    }

    public function remove($id_batu)
{
    $keranjang = session()->get('keranjang', []);

    if (isset($keranjang[$id_batu])) {
        unset($keranjang[$id_batu]);
        session()->put('keranjang', $keranjang);
        session()->flash('success', 'Product successfully removed from cart!');
    }

    return redirect()->route('transaksi.index');
}


}
=======

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


    public function calculateOngkir(Request $request)
    {
        // $response = Http::withHeaders([
        //     'key' => 'c6f5a244812b5c983cbd2810dcfbe62b'
        // ])->get('https://api.rajaongkir.com/starter/province');
        // dd($response->json());
        
        // $response2 = Http::withHeaders([
        //     'key' => 'c6f5a244812b5c983cbd2810dcfbe62b'
        // ])->get('https://api.rajaongkir.com/starter/city');

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
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590

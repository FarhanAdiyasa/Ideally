<?php

namespace App\Http\Controllers;

use App\Models\Batunesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class TransaksiController extends Controller
{
 
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

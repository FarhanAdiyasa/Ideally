<?php

namespace App\Http\Controllers;

use App\Models\Batunesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class TransaksiController extends Controller
{
    public function index()
{

    return view('transaksi.keranjang');
}

    

    public function cart()
    {
        return view('transaksi.keranjang');
    }

    public function tambahKeKeranjang($id_batu)
    {
        $selectedProduct = Batunesia::findOrFail($id_batu);
        $keranjang = Session::get('keranjang', []);

        $keranjangKey = 'produk_' . $selectedProduct->id;

        // Pengecekan apakah produk sudah ada di keranjang berdasarkan id produk
        $existingProduct = array_filter($keranjang, function ($item) use ($selectedProduct) {
            return $item['produk']->id == $selectedProduct->id;
        });

        // Jika produk sudah ada, tambahkan jumlahnya
        if (!empty($existingProduct)) {
            $existingProductKey = key($existingProduct);
            $keranjang[$existingProductKey]['jumlah']++;
        } else {
            // Jika produk belum ada di keranjang, tambahkan produk baru
            $newProduct = [
                'produk' => $selectedProduct,
                'jumlah' => 1,
            ];

            // Tambahkan produk baru ke keranjang
            $keranjang[$keranjangKey] = $newProduct;
        }

        Session::put('keranjang', $keranjang);

        return redirect()->route('transaksi.index');
    }

    
    public function hapusDariKeranjang($id_batu)
    {
        $keranjang = Session::get('keranjang', []);

        // Hapus item dari keranjang belanja berdasarkan $id
        unset($keranjang[$id_batu]);

        Session::put('keranjang', $keranjang);

        return redirect()->route('transaksi.index');
    }

}

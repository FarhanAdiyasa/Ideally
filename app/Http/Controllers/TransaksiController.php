<?php

namespace App\Http\Controllers;

use App\Models\Batunesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class TransaksiController extends Controller
{
    public function index()
{
    $keranjang = json_decode(request()->cookie('keranjang'), true) ?? [];
    
    // Menampilkan isi dari $keranjang sebelum ditampilkan di view
    dd($keranjang);

    return view('transaksi.keranjang', ['keranjang' => $keranjang]);
}

    

    public function cart()
    {
        return view('transaksi.keranjang');
    }

    public function tambahKeKeranjang($id_batu)
    {
        $selectedProduct = Batunesia::findOrFail($id_batu);

        // Membaca data keranjang dari cookies
        $keranjang = json_decode(request()->cookie('keranjang'), true) ?? [];

        $keranjangKey = 'produk_' . $selectedProduct->id;

        // Pengecekan apakah produk sudah ada di keranjang berdasarkan id produk
        if (array_key_exists($keranjangKey, $keranjang)) {
            // Jika produk sudah ada di keranjang, tambahkan jumlahnya
            $keranjang[$keranjangKey]['jumlah']++;
        } else {
            // Jika produk belum ada di keranjang, tambahkan produk baru
            $keranjang[$keranjangKey] = [
                'produk' => $selectedProduct,
                'jumlah' => 1,
            ];
        }

        // Menyimpan kembali data keranjang ke dalam cookies
        $cookie = cookie('keranjang', json_encode($keranjang), 60 * 24 * 7); // Simpan kembali data ke dalam cookie

        return response()->view('transaksi.keranjang', ['keranjang' => $keranjang])->withCookie($cookie);
    }




        
    public function hapusDariKeranjang($id_batu)
{
    $keranjang = Session::get('keranjang', []);

    if (array_key_exists($id_batu, $keranjang)) {
        unset($keranjang[$id_batu]);
        Session::put('keranjang', $keranjang);
        return redirect()->route('transaksi.index')->with('success', 'Produk berhasil dihapus dari keranjang');
    } else {
        return redirect()->route('transaksi.index')->with('error', 'Produk tidak ditemukan dalam keranjang');
    }
}

}

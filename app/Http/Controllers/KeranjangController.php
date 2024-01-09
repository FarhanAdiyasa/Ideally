<?php

namespace App\Http\Controllers;

use App\Models\Batunesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class KeranjangController extends Controller
{
 
    public function index()
{
    $batunesia = Session::get('batunesia', []);
    $everlasthings = Session::get('everlasthings', []);


    return view('transaksi.keranjang', compact('batunesia','everlasthings'));
}



    

    public function cart()
    {

        return view('transaksi.keranjang');
    }

}
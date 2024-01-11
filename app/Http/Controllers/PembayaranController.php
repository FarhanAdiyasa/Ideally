<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index() {
        return view('transaksi.pembayaran');
    }

    public function order(Request $request){
        
    }
}

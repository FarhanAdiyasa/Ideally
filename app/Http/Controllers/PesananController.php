<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function sedangDikemas() {
        $orders = Order::where('status_pesanan', 'Sedang Dikemas')->get();
        $page = 'dikemas';
        return view('pesanan.sedang_dikemas', compact('orders', 'page'));
    }

    public function dikirim() {
        $orders = Order::where('status_pesanan', 'Dikirim')->get();
        $page = 'dikirim';
        return view('pesanan.sedang_dikemas', compact('orders', 'page'));
    }

    public function selesai() {
        $orders = Order::where('status_pesanan', 'Selesai')->get();
        $page = 'selesai';
        return view('pesanan.sedang_dikemas', compact('orders', 'page'));
    }

    public function konfirmasiPesanan($id_order) {
        $order = Order::findOrFail($id_order);
        $order->status_pesanan = 'Selesai';
        $order->save();
        
        return redirect()->route('pesanan.selesai');
    }
    
    public function rincianPesanan($id_order){
        $order = Order::findOrFail($id_order);
        return view('pesanan.rincian_pesanan', compact('order'));
    }
}

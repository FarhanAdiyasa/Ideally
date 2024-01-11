<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index() {
        return view('transaksi.pembayaran');
    }

    public function order(Request $request){
        $user = Auth::user();

        $data = [
            'deflo_ids' => $request->deflo_ids,
            'user_id' => $user->user_id,
            'status' => 'unpaid',
        ];

        // dd($data);

        if ($order = Order::create($data)) {
            // dd($order);
            // $order->deflos()->sync($data['deflo_ids']);
            $order->nurseris()->sync($data['deflo_ids']);

            return ('success');
        }
        
        return ('gagal');
    }
}

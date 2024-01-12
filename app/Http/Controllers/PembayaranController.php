<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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

    public function bayar(Request $request) {
        // dd($request->bank);
        $key = config('midtrans.serverKey');

        $response = Http::withBasicAuth($key, '')->post('https://api.sandbox.midtrans.com/v2/charge', [
            "payment_type"          => "bank_transfer",
            "transaction_details"   => [
                "order_id"      => $request->order,
                "gross_amount"  => $request->grossAmount
            ],
            "bank_transfer"         => [
                "bank"          => $request->bank
            ]
        ]);

        // dd($response->json());
        $va = $response->json()['va_numbers'][0]['va_number'];
        $bank = $response->json()['va_numbers'][0]['bank'];

        return view('transaksi.pembayaran', compact('va', 'bank'));
    }
}

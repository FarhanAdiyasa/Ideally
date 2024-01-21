<?php

namespace App\Http\Controllers;

use App\Models\Order;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PembayaranController extends Controller
{
    public function index() {
        return view('transaksi.pembayaran');
    }


    public function cekStatus($order_id) {
        // Gantilah dengan nilai sesuai dengan kebutuhan Anda
        $api_key = config('midtrans.serverKey');

        $client = new Client();

        $response = $client->request('GET', "https://api.sandbox.midtrans.com/v2/{$order_id}/status", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode($api_key),
            ],
        ]);

        // Dapatkan body respons
        $body = $response->getBody()->getContents();

        // Ubah JSON menjadi array atau objek sesuai kebutuhan
        $data = json_decode($body, true); // Jika ingin hasil berupa array

        // Lakukan apa yang perlu Anda lakukan dengan data respons
        dd($data);

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
        $user = Auth::user();
        $total_harga = intval(str_replace(['.', ','], '', $request->total_harga));
        $biaya_pengiriman = intval(str_replace(['.', ','], '', $request->biaya_pengiriman));
        $gross_amount = intval(str_replace(['.', ','], '', $request->gross_amount));

        if ($order = Order::create([
            'user_id'       => $user->user_id,
            'total_harga'   => $total_harga,
            'biaya_ongkir'  => $biaya_pengiriman,
            'grand_total'   => $gross_amount,
            'bank'          => $request->bank,
            'status_pembayaran' => 'Pending',
            'status_pesanan'    => 'Menunggu Pembayaran' ])) 
        {   
            foreach (session('cart_deflo', []) as $deflo_id => $deflo) {
                $quantity = $deflo['quantity'];
                $order->nurseris()->attach($deflo_id, ['quantity' => $quantity]);
            }
            foreach (session('cart_batunesia', []) as $batu_id => $batu) {
                $quantity = $batu['quantity'];
                $order->batunesias()->attach($batu_id, ['quantity' => $quantity]);
            }
            foreach (session('cart_everlas', []) as $everlas_id => $everlas) {
                $quantity = $everlas['quantity'];
                $order->everlas_things()->attach($everlas_id, ['quantity' => $quantity]);
            }
        }

        $key = config('midtrans.serverKey');

        if ($order->bank === 'mandiri') {
            $response = Http::withBasicAuth($key, '')->post('https://api.sandbox.midtrans.com/v2/charge', [
                "payment_type"          => "echannel",
                "transaction_details"   => [
                    "order_id"      => $order->nomor_order,
                    "gross_amount"  => strval($order->grand_total)
                ],
                "echannel" => [
                    "bill_info1"    => "Payment:",
                    "bill_info2"    => "Online purchase"
                ]
            ]);

            $status_code = $response->json()['status_code'];
            $status_message = $response->json()['status_message'];
            if ($status_code != '201') {
                return view('transaksi.pembayaran')->withErrors(['error' => $status_message]);
            }

            $body = $response->json();
            $data = [
                "bank"          => 'mandiri',
                "bill_key"      => $body['bill_key'],
                "bill_code"   => $body['biller_code'],
                "expiry_time"   => $body['expiry_time']
            ];

        } else if ($order->bank === 'permata') {
            $response = Http::withBasicAuth($key, '')->post('https://api.sandbox.midtrans.com/v2/charge', [
                "payment_type"          => "permata",
                "bank_transfer"         => [
                    "bank"          => "permata",
                    "permata"       => [
                      "recipient_name"  => $user->firstname
                    ]
                ],
                "transaction_details"   => [
                    "order_id"      => $order->nomor_order,
                    "gross_amount"  => strval($order->grand_total)
                ]
            ]);

            $status_code = $response->json()['status_code'];
            $status_message = $response->json()['status_message'];
            if ($status_code != '201') {
                return view('transaksi.pembayaran')->withErrors(['error' => $status_message]);
            }

            $body = $response->json();
            $data = [
                "bank"          => 'permata',
                "va_number"     => $body['permata_va_number'],
                "expiry_time"   => $body['expiry_time']
            ];

        } else {
            $response = Http::withBasicAuth($key, '')->post('https://api.sandbox.midtrans.com/v2/charge', [
                "payment_type"          => "bank_transfer",
                "transaction_details"   => [
                    "order_id"      => $order->nomor_order,
                    "gross_amount"  => strval($order->grand_total)
                ],
                // Optional Parameter, Customer Info
                "customer_details"      => [
                    "email"         => $user->email,
                    "first_name"    => $user->firstname,
                    "last_name"     => $user->lastname,
                    "phone"         => $user->telephone_number
                ],
                "bank_transfer"         => [
                    "bank"          => $order->bank
                ]
            ]);

            $status_code = $response->json()['status_code'];
            $status_message = $response->json()['status_message'];
            if ($status_code != '201') {
                return view('transaksi.pembayaran')->withErrors(['error' => $status_message]);
            }

            $body = $response->json();
            $data = [
                "bank"          => $order->bank,
                "va_number"     => $body['va_numbers'][0]['va_number'],
                "expiry_time"   => $body['expiry_time']
            ];

        }

        if ($data != null) {
            return view('transaksi.konfirmasi', compact('data', 'order', 'user'));
        }

        return view('transaksi.pembayaran')->withErrors(['error' => 'Please try again']);
    }

    public function handle_after(Request $request) {
        dd($request->all());
    }
}

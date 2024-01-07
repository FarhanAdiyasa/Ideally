<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Everlas_Things;
use Illuminate\Support\Facades\Session;

class everlastThingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('brand_everlas_things.brand-everlasthing');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function detailProduct($id_everlas_things) {
        // Mengambil data produk dengan id_batu yang diberikan
        $everlas_thing = Everlas_Things::findOrFail($id_everlas_things);
    
        // Mengirim data produk ke tampilan
        return view('brand_everlas_things.preview_product', ['everlast' => $everlas_thing]);
    }
    
    public function showcase() {

        $everlas_things = everlas_things::paginate(25); // Meminta paginasi langsung dari model
        return view('brand_everlas_things.showcase', ['everlast' => $everlas_things]);
    }

    public function tambahKeKeranjang($id_everlas_things, $quantity)
    {
        $product = Everlas_Things::findOrFail($id_everlas_things);
    
        $cart = session()->get('everlasthings', []);
    
        if(isset($cart[$id_everlas_things])) {
            $currentQuantity = $cart[$id_everlas_things]['quantity'];
            $cart[$id_everlas_things]['quantity'] = $currentQuantity + (int)$quantity;
        } else {
            $cart[$id_everlas_things] = [
                "produk" => $product,
                "quantity" => (int)$quantity
            ];
        }

        session()->put('everlasthings', $cart);
        $keranjang = Session::get('everlasthings', []);
        return redirect()->route('transaksi.index');        
    }


    public function updateEverlasthings(Request $request)
    {
    if ($request->id_everlas_things && $request->quantity) {
        $cart = session()->get('everlasthings');

        if (isset($cart[$request->id_everlas_things])) { // Perbaikan penamaan variabel
            $cart[$request->id_everlas_things]["quantity"] = $request->quantity;
            session()->put('everlasthings', $cart);
            session()->flash('success', 'Cart successfully updated!');
            }
        }
    }

    public function removeEverlasthings(Request $request)
    {
        if($request->id) {
            $cart = session()->get('everlasthings');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('everlasthings', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function removeAllEverlasthings()
    {
        session()->forget('everlasthings');
        session()->flash('success', 'Semua produk everlasthings berhasil dihapus dari keranjang!');
        return response()->json(['success' => true], 200); // Memberikan respon ke AJAX
    }
}

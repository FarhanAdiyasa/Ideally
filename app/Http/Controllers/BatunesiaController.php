<?php

namespace App\Http\Controllers;

use App\Models\Batunesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BatunesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batunesias = Batunesia::paginate(24); // Meminta paginasi langsung dari model
        return view('brand-batunesia.showcase_batunesia_store', ['batunesias' => $batunesias]);
    }

    public function showProduct($id)
    {
        $product = Batunesia::find($id);
        return view('showcase', ['product' => $product]);
    }

    // public function filterByWhite()
    // {
    //     $batunesias = Batunesia::where('warna', 'white')->paginate(28);
    //     $batunesias = Batunesia::paginate(24); // Meminta paginasi langsung dari model
    //     return view('brand-batunesia.showcase_batunesia_store', ['batunesias' => $batunesias]);
    // }

    public function filterByWhite()
    {
        $batunesias = Batunesia::where('warna_1', 'white')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByCream()
    {
$batunesias = Batunesia::where('warna_1', 'cream')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBlack()
    {
 $batunesias = Batunesia::where('warna_1', 'black')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByGrey()
    {
 $batunesias = Batunesia::where('warna_1', 'grey')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }
    
    public function filterByBrown()
    {
        $batunesias = Batunesia::where('warna_1', 'brown')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByPancawarna()
    {
        $batunesias = Batunesia::where('warna_1', 'pancawarna')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBatuHampar()
    {
        $batunesias = Batunesia::where('kategori', 'Batu Hampar')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBatuTempel()
    {
        $batunesias = Batunesia::where('kategori', 'Batu Tempel')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByBatuHias()
    {
        $batunesias = Batunesia::where('kategori', 'Batu Hias')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByOrnamenBatu()
    {
        $batunesias = Batunesia::where('kategori', 'Ornamen Batu')->paginate(24);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    public function filterByPotBatu()
    {
        $batunesias = Batunesia::where('kategori', 'Pot Batu')->paginate(28);
        return view('brand-batunesia.showcase_batunesia_store', compact('batunesias'));
    }

    
    public function show(string $id)
    {
        // Fetch the product details based on the ID
        $batunesias = Batunesia::find($id);

        // Pass the product details to the view
         return view('brand-batunesia.showcase_batunesia_store', ['batunesia' => $batunesias]);
    }

    public function tambahKeKeranjang($id_batu, $quantity)
    {
        $product = Batunesia::findOrFail($id_batu);
    
        $cart = session()->get('cart_batunesia', []);
    
        if(isset($cart[$id_batu])) {
            $currentQuantity = $cart[$id_batu]['quantity'];
            $cart[$id_batu]['quantity'] = $currentQuantity + (int)$quantity; // Menambahkan nilai $quantity ke jumlah yang sudah ada
        } else {
            $cart[$id_batu] = [
                "produk" => $product,
                "quantity" => (int)$quantity
            ];
        }
        session()->put('batunesia', $cart);
        return redirect()->route('transaksi.index');        
    }


    public function updateBatunesia(Request $request)
    {
        if($request->id_batu && $request->quantity){
            $cart = session()->get('cart_batunesia');
            $cart[$request->id_batu]["quantity"] = $request->quantity;
            session()->put('cart_batunesia', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function removeBatunesia(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart_batunesia');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart_batunesia', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function removeAllBatunesia()
    {
        session()->forget('cart_batunesia');
        session()->flash('success', 'Semua produk Batunesia berhasil dihapus dari keranjang!');
        return response()->json(['success' => true], 200); // Memberikan respon ke AJAX
    }
}
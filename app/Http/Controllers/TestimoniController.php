<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Batunesia;
use App\Models\Dedikasi_Flora;
use App\Models\Everlas_Things;
use App\Models\Konkurito;
use App\Models\Shineage;
use App\Models\Agrigard;
use App\Models\TestimoniEverlasting;
use App\Models\TestimoniSignage;
use App\Models\TestimoniBatunesia;
use App\Models\TestimoniKonkurito;
use App\Models\TestimoniDeflo;
use App\Models\TestimoniAgrigard;
use App\Models\Testimonial;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Fetch orders from the database
    $orders = Order::all();
    $agrigards = Agrigard::all();
    $batunesias = Batunesia::all();
    $konkuritos = Konkurito::all();
    $deflos = Dedikasi_Flora::all();
    $everlastings = Everlas_Things::all();
    $shineages = Shineage::all();

    // Pass the orders and products data to the Blade view
    return view('testimoni.testimoniindex', [
        'orders' => $orders,
        'agrigards' => $agrigards,
        'batunesias' => $batunesias,
        'konkuritos' => $konkuritos,
        'deflos' => $deflos,
        'everlastings' => $everlastings,
        'shineages' => $shineages,
    ]);
    }

    public function storeagrigard(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            // ... (other validation rules)
            'Deskripsi' => 'required|string',
        ]);

        // Retrieve the order information from the request
        $orderId = $validatedData['id_order'] ?? null;

        // If you have a direct relation between TestimoniAgrigard and Order
        $order = Order::find($orderId);

        if ($order) {
            // Retrieve user ID and brand ID from the Order model
            $userId = $order->user_id;

            // Add user ID and brand ID to the validated data
            $validatedData['user_id'] = $userId;

            // Create testimonial for Agrigard
            TestimoniAgrigard::create($validatedData);

            return redirect()->back()->with('success', 'Testimonial submitted successfully.');
        } else {
            return redirect()->back()->with('error', 'Order not found.');
        }
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
        $brand = $request->input('brand');
        //$productID = $request->input('product_id');
        $orderID = $request->input('id_orders');
        $userID = $request->input('id_users');

        $idColumn = null; // Default value


    switch ($brand) {
        case 'batunesias':
            $idColumn = 'id_batunesia';
            break;
        case 'konkuritos':
            $idColumn = 'id_konku_ritos';
            break;
        case 'everlastings':
            $idColumn = 'id_everlastings';
            break;
        case 'shineages':
            $idColumn = 'id_shine_ages';
            break;
        case 'agrigards':
            $idColumn = 'id_agri_gard';
            break;
        case 'deflos':
            $idColumn = 'id_deflo';
            break;
    }

        $productID = $request->input("$brand");
    
        // Assuming your testimonial table names are like 'testimonies_batunesias', 'testimonies_konkuritos', etc.
        $testimonialTable = 'testimoni_' . strtolower($brand);
    
        // Now you can use the DB facade to insert into the dynamic table.
        DB::table($testimonialTable)->insert([
            $idColumn => $productID,
            'id_orders' => $orderID,
            'id_users' => $userID, 
            'Rating' => $request->input('Rating'),
            'Deskripsi' => $request->input('Deskripsi'),
        ]);
    
        return redirect()->back()->with('success', 'Testimonial submitted successfully');
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
}

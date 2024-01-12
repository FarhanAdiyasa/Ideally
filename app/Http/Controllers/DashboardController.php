<?php

namespace App\Http\Controllers;

use App\Charts\OrderBulananChart;
use App\Models\Artikel;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Analytics\Facades\Analytics;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OrderBulananChart $chart)
    {
        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();
        $userCreated = User::CountCreated($startDate, $endDate);
        $orderHari = Order::whereDate('created_at', now())->get();
        $jmlArt = Artikel::all()->count();
        return view('Pages/Dashboard/index',  ["userCreated"=>$userCreated, 'chart' => $chart->build("harian"), "orderHari"=>$orderHari->count(), 'chart2' => $chart->build("bulanan"), 'chart3' => $chart->build("tahunan"), 'jmlArt'=>$jmlArt]);
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
}

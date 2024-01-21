<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Agrigard;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateAgrigard;
use App\Http\Requests\AgrigardRequest;
use Illuminate\Support\Facades\Storage;

class AgrigardController extends Controller
{
<<<<<<< HEAD
        public function indexBrand()
    {
        $agrigards = Agrigard::where('stok', '>', 0)->inRandomOrder()->take(4)->get();
=======
    public function indexBrand()
    {
        $agrigards = Agrigard::where('stok', '>', 0)->inRandomOrder()->take(12)->get();
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
        $agrigardbaru = Agrigard::where('stok', '>', 0)->latest('created_at')->inRandomOrder()->take(4)->get();
        return view('agrigards.index', compact('agrigards', 'agrigardbaru'));
    }

    public function showcase()
    {
        $agrigards = Agrigard::where('stok', '>', 0)->get();
        return view('agrigards.showcase', compact('agrigards'));
    }

    public function details($id_agrigard)
    {
        $agrigards = Agrigard::findOrFail($id_agrigard);
        $kategori = $agrigards->kategori;
        $agrigardterkait = Agrigard::where('stok', '>', 0)->where('kategori', '=', $agrigards->kategori)
<<<<<<< HEAD
        ->where('id_agrigard', '!=', $agrigards->id_agrigard)->inRandomOrder()->take(8)->get();
=======
            ->where('id_agrigard', '!=', $agrigards->id_agrigard)->inRandomOrder()->take(8)->get();
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
        $agrigardbaru = Agrigard::where('stok', '>', 0)->latest('created_at')->inRandomOrder()->take(8)->get();
        $agrigardpilihan = Agrigard::where('stok', '>', 0)->inRandomOrder()->take(8)->get();
        return view('agrigards.details', compact('agrigards', 'agrigardterkait', 'agrigardbaru', 'agrigardpilihan'));
    }
<<<<<<< HEAD
=======

    public function showcase2(Request $request)
    {
        $agrigards = Agrigard::where('stok', '>', 0)->when($request->filled('kategori'), function ($query) use ($request) {
            return $query->where('kategori', $request->input('kategori'));
        })
            ->paginate(20);

        return view('agrigards.showcase', compact('agrigards'));
    }
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
}

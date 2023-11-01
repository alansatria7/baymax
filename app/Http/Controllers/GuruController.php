<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardGuru;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        
        $mapels = CardGuru::distinct('mapel')->pluck('mapel')->filter()->toArray();

        
        $selectedMapel = $request->input('mapel');
        $guru = CardGuru::when($selectedMapel, function ($query, $selectedMapel) {
            return $query->where('mapel', $selectedMapel);
        })->get();

        return view('listteacher', compact('guru', 'mapels', 'selectedMapel'));
    }



    public function show(CardGuru $guru)
    {
        return view('detailguru', compact('guru'));
    }

    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardGuru;

class GuruController extends Controller
{
    public function index()
    {
        // Ambil semua data guru
        $guru = CardGuru::all();

        // Mendapatkan daftar unik mata pelajaran
        $mapels = CardGuru::distinct('mapel')->pluck('mapel')->filter()->toArray();

        // Filter data berdasarkan mata pelajaran jika terdapat parameter 'mapel' dalam URL
        if (request()->has('mapel')) {
            $guru = $guru->where('mapel', request('mapel'));
        }

        // Tampilkan view dengan data guru dan daftar mapel
        return view('listteacher', compact('guru', 'mapels'));
    }

    // public function show($id)
    // {
    //     $guru = CardGuru::find($id);
    //     if (!$guru) {
    //        return redirect('listteacher')->with('status', 'Data tidak ditemukan');
    //     }
    //     return view('detailteacher', ['guru' => $guru]);
    // }

    public function show(CardGuru $guru)
    {
        return view('detailguru', compact('guru'));
    }

    

}

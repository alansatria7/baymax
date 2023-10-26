<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardGuru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = CardGuru::all();
        return view('listteacher', ['guru' => $guru]);
    }

    public function show($id)
    {
        $guru = CardGuru::find($id);
        if (!$guru) {
           return redirect('listteacher')->with('status', 'Data tidak ditemukan');
        }
        return view('detailteacher', ['guru' => $guru]);
    }


}

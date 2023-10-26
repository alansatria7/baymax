<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;



class DetailController extends Controller
{
    // public function index()
    // {
    // $detail = Detail::all();
    // return view('detailguru', ['data' => $detail]);
    // }


    public function showDetail($detail1)
    {
        // Mengambil data guru berdasarkan nama
        $detail1 = Detail::where('nama', 'ALLI')->first();

        // Menampilkan data
        if ($detail1) {
            echo "Mapel: " . $detail1->mapel ;
            echo "Intro: " . $detail1->intro ;
          

        } else {
            return view('detail.not-found');
        }
    }


    public function showDetail2($detail2)
    {
        // Mengambil data guru berdasarkan nama
        $detail2 = Detail::where('nama', 'ALLAN')->first();

        // Menampilkan data
        if ($detail2) {
            echo "Mapel: " . $detail2->mapel ;
            echo "Intro: " . $detail2->intro ;
          

        } else {
            return view('detail.not-found');
        }
    }

   
}

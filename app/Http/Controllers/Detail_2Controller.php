<?php

namespace App\Http\Controllers;

use App\Models\Detail2;
use Illuminate\Http\Request;

class Detail_2Controller extends Controller
{
    public function index()
    {
    $detail_2 = Detail2::all();
    return view('detailguru2', ['data' => $detail_2]);
    }
}

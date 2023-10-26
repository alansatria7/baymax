<?php

namespace App\Http\Controllers;

use App\Models\Detail3;
use Illuminate\Http\Request;

class Detail_3Controller extends Controller
{
    public function index()
    {
    $detail_3 = Detail3::all();
    return view('detailguru3', ['data' => $detail_3]);
    }    
}

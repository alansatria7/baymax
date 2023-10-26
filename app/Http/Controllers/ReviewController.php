<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
    {
        return view('reviews.create');
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'comment' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);
    
        // Simpan ulasan ke database
        Review::create($request->all());
    
        return redirect()->route('product.show', $request->input('product_id'))
            ->with('success', 'Ulasan berhasil disimpan');
    }

}

<form action="{{ route('review.store') }}" method="POST">
    @csrf
    
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tulis Ulasan</h2>
    <form action="{{ route('review.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_id">Produk</label>
            <select name="product_id" id="product_id" class="form-control">
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comment">Komentar</label>
            <textarea name="comment" id="comment" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" name="rating" id="rating" class="form-control" min="1" max="5">
        </div>
        <a href="{{ route('review.create', ['product_id' => $product->id]) }}" class="btn btn-primary">Tambah Ulasan</a>

    </form>
</div>
@endsection

</form>


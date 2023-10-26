@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>

    <h2>Ulasan Produk</h2>
    <ul>
        @forelse ($reviews as $review)
            <li>
                <p>{{ $review->comment }}</p>
                <p>Rating: {{ $review->rating }}</p>
            </li>
        @empty
            <li>Belum ada ulasan untuk produk ini.</li>
        @endforelse
    </ul>

    <a href="{{ route('review.create', ['product_id' => $product->id]) }}" class="btn btn-primary">Tambah Ulasan</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ulasan Produk</h1>
    <a href="{{ route('reviews.create') }}" class="btn btn-primary">Tambah Ulasan</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-4">
        @foreach($reviews as $review)
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Peringkat: {{ $review->rating }}/5</h5>
                        <p class="card-text">{{ $review->comment }}</p>
                        <p class="card-subtitle text-muted">Ditulis oleh: {{ $review->user->name }}</p>
                        <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

    
</body>
</html> --}}
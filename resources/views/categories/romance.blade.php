@extends('master')
@section('title', 'Romance')

@section('content')
    <div class="container">
        <div class="row g-3">
            @foreach ($bookData as $item)
                <div class="col-12 col-md-6 col-lg-3 justify-content-center">
                    <div class="card">
                        <img src="{{ $item->bookImageUrl }}" class="card-img-top" style="height: 30rem;" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->bookTitle }}</h5>
                        <p class="card-text">{{ $item->bookAuthor }}</p>
                        <a href="/book2" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

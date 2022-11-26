@extends('master')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row g-3">
            @foreach ($bookData as $item)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{ $item->bookImageUrl }}" class="card-img-top" style="height: 30rem;" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->bookTitle }}</h5>
                        <p class="card-text">{{ $item->bookAuthor }}</p>
                        @switch($item->bookId)
                            @case(1)
                                <a href="/book1" class="btn btn-primary">Detail</a>
                                @break
                            @case(2)
                                <a href="/book2" class="btn btn-primary">Detail</a>
                                @break
                            @case(3)
                                <a href="/book3" class="btn btn-primary">Detail</a>
                                @break
                            @case(4)
                                <a href="/book4" class="btn btn-primary">Detail</a>
                                @break
                        @endswitch
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

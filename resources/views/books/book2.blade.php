@extends('master')
@section('title', '{{ $bookData->bookTitle }}')

@section('content')
    <div class="container">
        <div class="row g-3">
            @foreach ($bookData as $item)
            <div class="mx-auto">
                <div class="card">
                    <img src="{{ $item->bookImageUrl }}" class="mx-auto card-img-top" style="height: 30rem; width:19.3rem;" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Title: {{ $item->bookTitle }}</h5>
                    <h5 class="card-title">Author: {{ $item->bookAuthor }}</h5>
                    <h5 class="card-title">Publisher: {{ $item->publisherName }}</h5>
                    <h5 class="card-title">Year: {{ $item->bookYear }}</h5>
                    <h5 class="card-title">Synopsis: </h5>
                    <p class="card-text">{{ $item->bookSynopsis }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

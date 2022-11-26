@extends('master')
@section('title', '{{$publisherData->publisherName}}')

@section('content')
    <div class="container">
        <div class="row g-3">
            @foreach ($publisherData as $item)
                <div class="mx-auto">
                    <div class="card">
                        <img src="{{ $item->publisherImageUrl }}" class="mx-auto card-img-top" style="height: 30rem; width: 40rem;" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Name: {{ $item->publisherName }}</h5>
                        <h5 class="card-title">Address: {{ $item->publisherAddress }}</h5>
                        <h5 class="card-title">Phone: {{ $item->publisherPhone }}</h5>
                        <h5 class="card-title">Email: {{ $item->publisherEmail }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

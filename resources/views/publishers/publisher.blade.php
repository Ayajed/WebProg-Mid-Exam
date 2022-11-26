@extends('master')
@section('title', 'Publisher')

@section('content')
    <div class="container">
        <div class="row g-3">
            @foreach ($publisherData as $item)
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <img src="{{ $item->publisherImageUrl }}" class="card-img-top" style="height: 30rem;" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->publisherName }}</h5>
                        <p class="card-text">{{ $item->publisherAddress }}</p>
                        @switch($item->publisherId)
                            @case(1)
                                <a href="/publisher1" class="btn btn-primary">Detail</a>
                                @break
                            @case(2)
                                <a href="/publisher2" class="btn btn-primary">Detail</a>
                                @break
                        @endswitch
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

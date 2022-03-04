@extends('layouts.default')

@section('pageTitle', 'Movies')

@section('main')
<div class="d-flex flex-wrap justify-content-center gap-3 my-5">
    @foreach ($movies as $movie)
    {{-- @dump($movie); --}}
    <div class="card text-center">
        <h1>{{$movie->title}}</h1>
        <div class="card-body">
            <h5 class="card-title">{{$movie->original_title}}</h5>
            <p class="card-text">{{$movie->nationality}}</p>
            <p class="card-text">{{$movie->date}}</p>
            <p class="card-text">{{$movie->vote}}</p>
        </div>
    </div>
    @endforeach
</div>
>@endsection

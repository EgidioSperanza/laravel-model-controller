@extends('layouts.default')

@section('pageTitle', 'Movies')

@section('main')
<div class="d-flex flex-wrap justify-content-center gap-3 my-5">
    @foreach ($movies as $movie)
    {{-- @dump($movie); --}}
    <div class="card text-center pt-5">
        <h1>{{$movie->title}}</h1>
        <div class="card-body p-5">
            <p class="card-text">Original Title</p>
            <h5 class="card-title">{{$movie->original_title}}</h5>
            <p class="card-text">Nation: {{$movie->nationality}}</p>
            <p class="card-text">{{$movie->date}}</p>
            <p class="card-text">Vote:
                @for ( $i=0; $i<5; $i++)
                    @if ($movie->vote/2 - $i >= 1)
                    <i class="bi bi-star-fill"></i>
                    @elseif ($movie->vote/2 - $i > 0 && $movie->vote/2 - $i < 1)
                    <i class="bi bi-star-half"></i>
                    @else 
                    <i class="bi bi-star"></i>
                    @endif
                @endfor
                {{$movie->vote}}
            </p>
        </div>
    </div>
    @endforeach
</div>
@endsection

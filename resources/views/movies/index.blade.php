@extends('layout.app')

@section('title', 'Movies')

@section('contenuto')
    <div class="movies">
        @foreach ($movies as $movie)
            <h2>titolo: {{$movie->title}}</h2>
        @endforeach
    </div>
@endsection
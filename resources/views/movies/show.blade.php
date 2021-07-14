@extends('layout.app')

@section('title', 'Movie')

@section('contenuto')
    
<img height="300" src="{{$movie->poster}}" alt="">
<h2>titolo: {{$movie->title}}</h2>
<h3>anno: {{$movie->year}}</h3>
<p>descrizione: {{$movie->description}}</p>
    
@endsection
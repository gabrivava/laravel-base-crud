@extends('layout.app')

@section('title', 'Add a new Movie')

@section('contenuto')
<div class="container">
    <form action="{{ route('movies.update', $movie->id)}}" method="POST">
        
        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add a title" value="{{$movie->title}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" >{{$movie->description}}</textarea>
        </div>
        <div class="form-group">
            <h4> Poster attuale </h4>
            <img height="200" src="{{$movie->poster}}" alt="">
        </div>
        <div class="form-group">
            <label for="poster">Poster URL </label>
            <input type="url" name="poster" id="poster" class="form-control" placeholder="Poster url" value="{{$movie->poster}}">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" value="{{$movie->year}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection
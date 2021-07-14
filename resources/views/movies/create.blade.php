@extends('layout.app')

@section('title', 'Add a new Movie')

@section('contenuto')
<div class="container">
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add a title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="poster">Poster</label>
            <input type="url" name="poster" id="poster" class="form-control" placeholder="Poster url">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" placeholder="Year of release">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection
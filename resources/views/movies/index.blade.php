@extends('layout.app')

@section('title', 'Movies')

@section('contenuto')
<table class="table container">
    <thead>
        <th>ID</th>
        <th>POSTER</th>
        <th>TITOLO</th>
        <th>YEAR</th>
        <th>DESCRIPTION</th>
        <th>ACTIONS</th>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td><img width="100" src="{{$movie->poster}}" alt=""></td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->year}}</td>
                <td>{{$movie->description}}</td>
                <td> <a href="{{route('movies.show', $movie->id)}}">View</a>
                    | <a href="{{route('movies.edit', $movie->id)}}">Edit</a>  
                    | <a href="">
                        <form action="{{route('movies.destroy', $movie->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input type="submit" value="Delete">
                        </form>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
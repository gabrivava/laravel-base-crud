<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div>
            <div class="content">
                <div class="title m-b-md">
                    @yield('title')
                </div>

                <div class="links">
                    <a href="{{route('home')}}">home</a>
                    <a href="{{route('movies')}}">movies</a>
                    <a href="{{route('movies.create')}}">create-movie</a>
                </div>

                @yield('contenuto')
            </div>
        </div>
    </body>
</html>
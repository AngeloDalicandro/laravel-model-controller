@extends('layouts.app')

@section('main_content')
    
    <ul>

        @foreach ($movies as $movie)

            <li> Titolo : {{ $movie['title'] }} - Anno di pubblicazione : {{ $movie['date'] }} </li>

        @endforeach

    </ul>

@endsection
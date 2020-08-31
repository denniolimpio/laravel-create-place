@extends('layouts.layout')

@section('main_content')

<h1> Movies: {{ $Nome_Raccolta }}  </h1>


  <div>

    @foreach ($movies as $movie)
      <ul>
        <li> <strong>Titolo Originale: </strong> {{ $movie['titolo originale'] }}  </li>
        <li> <strong>Titolo:</strong> {{ $movie['titolo'] }}  </li>
        <li> <strong>Genere:</strong> {{ $movie['genere'] }} </li>
        <li> <strong>Trama:</strong> {{ $movie['descrizione']  }} </li>
      </ul>

    @endforeach


  </div>



@endsection


@section ('header_content')
@endsection

@section('footer_content')

@endsection

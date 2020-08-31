<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller

{
    public function film() {

      // $movies = [
      //   [
      //     'titolo' => 'ritorno al futuro',
      //     'score' => 6,
      //     'anno' => 1980,
      //   ],
      //
      //   [
      //     'titolo' => '1917',
      //     'score' => 9,
      //     'anno' => 2020,
      //   ],
      //
      //   [
      //     'titolo' => 'bastardi senza gloria',
      //     'score' => 8,
      //     'anno' => 2010,
      //   ],
      // ];

      /// dd è una alternativa a var_dump
      // dd($movies);
      $movies = Movie::all();

        return view('movies', [
          'Nome_Raccolta' => 'Denniflix',
          'movies' => $movies,
        ]);
    }


}

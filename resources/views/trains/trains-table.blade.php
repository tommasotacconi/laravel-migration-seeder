@extends('layouts.app');

@section('page-title', 'Daily trains table');

@section('main-content')
<h1 class="text-center p-3">
  Movie index
</h1>
<div class="container-lg">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Titolo originale</th>
        <th scope="col">Origine</th>
        <th scope="col">Data d'uscita</th>
        <th scope="col">Vote</th>
      </tr>
    </head>
    <tbody>
    @foreach ($movies as $id => $movie)
      <tr>
        <td>{{ $movie->title }}</td>
        <td>{{ $movie->original_title }}</td>
        <td>{{ $movie->nationality }}</td>
        <td>{{ $movie->date }}</td>
        <td>{{ $movie->vote }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection

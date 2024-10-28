@extends('layouts.app')

@section('page-title', 'Daily trains table')

@section('main-content')
<h1 class="text-center p-3">
  Trains Table
</h1>
<div class="container-lg">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Compagnia</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Data di partenza</th>
        <th scope="col">Stazione d'arrivo</th>
        <th scope="col">Data d'arrivo</th>
        <th scope="col">Codice del treno</th>
        <th scope="col">N. di carrozze</th>
        <th scope="col">In orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </head>
    <tbody>
    @foreach ($trains as $id => $train)
      <tr>
        <td>{{ $train->company }}</td>
        <td>{{ $train->departure_station }}</td>
        <td>{{ $train->departure_time }}</td>
        <td>{{ $train->arrival_station }}</td>
        <td>{{ $train->arrival_time }}</td>
        <td>{{ $train->identification_number }}</td>
        <td>{{ $train->cars_number }}</td>
        {{-- Train delay check --}}
        @if ($train->on_time)
        <td>&bull;</td>
        @else
        <td></td>
        @endif
        {{-- Train cancelled check --}}
        @if ($train->cancelled)
        <td>&bull;</td>
        @else
        <td></td>
        @endif
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection

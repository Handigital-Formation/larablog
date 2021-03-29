@extends('layout')

@section('main')

  <h2>Task</h2>
  <p>Ceci est ma page task</p>
  
  <h3>Projet: {{ $monProjet }}</h3>

    <ul>
        @foreach ($tasks as $task )
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection

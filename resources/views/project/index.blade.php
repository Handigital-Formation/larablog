@extends('layout')

@section('main')

  <h2>Project - Index</h2>

  <ul>
        @foreach ($projects as $project)
          <li>{{ $project->title }}</li>
        @endforeach
  </ul>

  <a href="/project/create">Créer un nouveau projet</a>
@endsection

@extends('layout')

@section('main')

  <h2>Project - Index</h2>

  <ul>
        @foreach ($projects as $project)
          <li>{{ $project->title }}</li>
        @endforeach
  </ul>

@endsection

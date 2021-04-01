@extends('layout')

@section('main')

  <h2>Project - Create</h2>
  <h3>Créer un nouveau projet</h3>
  
  <form method="POST" action="/project">
    @csrf
        <div>
            <input type="text" name="title" placeholder="Titre du projet">
        </div>
        <div>
            <textarea name="description" placeholder="Description du projet"></textarea>
        </div>
        <div>
            <button type="submit">Créer le projet</button>
        </div>
    </form>

@endsection

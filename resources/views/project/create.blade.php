@extends('layout')

@section('main')

  <h2>Project - Create</h2>
  <h3>Créer un nouveau projet</h3>

  @error('title')
    <p style="color:red">{{$errors->first('title')}}</p>
  @enderror
  
  <form method="POST" action="/project">
    @csrf
        <div>
            <input @error('title') style="border-color:red" @enderror type="text" name="title" placeholder="Titre du projet" value="{{old('title')}}">
        </div>
        <div>
            <textarea name="description" placeholder="Description du projet">{{old('description')}}</textarea>
        </div>
        <div>
            <button type="submit">Créer le projet</button>
        </div>
    </form>

@endsection

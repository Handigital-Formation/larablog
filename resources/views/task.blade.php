@extends('layout')

@section('main')

  <h2>Task</h2>
  <p>Ceci est ma page task</p>

  <?php echo $maTache; ?>
  
  {{ $maTache }}

  <ul>
        <?php foreach ($tasks as $task ) : ?>
    <li><?= $task; ?></li>
        <?php endforeach; ?>
  </ul>

    <ul>
        @foreach ($tasks as $task )
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection

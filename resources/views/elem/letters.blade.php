@extends('layout.symbol-layout')

@section('content')
<div class="letters cubes">
  <div class="cube">

    <?php foreach ($letters as $letter): ?>
      <p>{{$letter}}</p>
    <?php endforeach; ?>


  </div>
</div>

@endsection

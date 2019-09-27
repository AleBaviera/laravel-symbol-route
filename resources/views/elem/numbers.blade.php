@extends('layout.symbol-layout')

@section('content')
<div class="numbers cubes">
  <div class="cube">

    <?php foreach ($numbers as $number): ?>
      <p>{{$number}}</p>
    <?php endforeach; ?>


  </div>
</div>

@endsection

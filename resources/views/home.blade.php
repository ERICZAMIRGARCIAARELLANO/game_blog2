@extends('layouts.app')

@section('container')
<h1 class="text-center mb-4">bienvenido a mi pagina web</h1>

<div class="row">

  @foreach ( $games as $game )
  <div class="col-lg-3 col-md-6 col-sm-12 text-center">
    <div class="game-box" style="background-image: url('{{ $game->image }}');">
      
    </div>
  </div>
  @endforeach

</div>
@endsection

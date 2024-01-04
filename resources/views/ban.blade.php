@extends('ban_layout')

@section('content')

  <img src="path_to_image.jpg" alt="Imagen de usuario">
  <p>{{ $user->username }}</p>

  <a class="come-back" href="/">Volver</a>
  @endsection

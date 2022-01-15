@extends('layouts.plantilla')
@section('title','Edit')
@section('content')
<h1>welcome edit</h1>

<form action="{{route('cursos.store')}}" method="POST">
  @csrf
  <label for="name">Nombre:</label><br>
  <input type="text" name="name" value="{{$curso->name}}"><br>
  <label for="descripcion">Descripción:</label><br>
  <textarea name="descripcion" id="" cols="30" rows="10">"{{$curso->descripcion}}"</textarea><br>
  <label for="categoria">categoria:</label><br>
  <input type="text" name="categoria" value="{{$curso->categoria}}"><br>
  <input type="submit" value="crear">
</form>
<a href="{{route('cursos.index')}}">regresar</a>
@endsection('content')

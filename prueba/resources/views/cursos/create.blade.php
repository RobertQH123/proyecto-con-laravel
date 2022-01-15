@extends('layouts.plantilla')
@section('title','Create')
@section('content')
<h1>welcome create</h1>

<form action="{{route('cursos.store')}}" method="POST">
  @csrf
  <label for="name">Nombre:</label><br>
  <input type="text" name="name" value="{{old('name')}}"><br>
  @error('name')
  <small>{{$message}}</small><br>    
  @enderror
  <label for="descripcion">Descripción:</label><br>
  <textarea name="descripcion" cols="30" rows="10">{{old('descripcion')}} </textarea><br>
  @error('descripcion')
  <small>{{$message}}</small><br>    
  @enderror
  <label for="categoria">categoria:</label><br>
  <input type="text" name="categoria" value="{{old('categoria')}}"><br>
  @error('categoria')
  <small>{{$message}}</small><br>    
  @enderror
  <input type="submit" value="crear">
</form>
<a href="{{route('cursos.index')}}">regresar</a>
@endsection('content')

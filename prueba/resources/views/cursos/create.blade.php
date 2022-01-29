@extends('layouts.plantilla')
@section('title','Create')
@section('content')
<h1 class="text-3xl p-3">crear curso</h1>
<form action="{{route('cursos.store')}}" class="m-auto w-96 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nombre:</label><br>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="Username" value="{{old('name')}}">
    @error('name')
    <small class="form-text text-muted">{{$message}}</small>
    @enderror
  </div>
  <div class="form-group">
    <label for="textarea">Descripción:</label><br>
    <textarea class="form-control" id="textarea" name="descripcion" cols="10" rows="5">{{old('descripcion')}}</textarea>
    @error('descripcion')
    <small class="form-text text-muted">{{$message}}</small>
    @enderror
  </div>
  <div class="form-group my-1">
    <label for="Username">categoria:</label><br>
    <input type="text" class="form-control" name="categoria" id="Username" aria-describedby="Username" value="{{old('categoria')}}">
    @error('categoria')
    <small class="form-text text-muted">{{$message}}</small>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary btn-lg bg-primary">crear</button>
  <a href="{{route('cursos.index')}}" class="btn btn-primary btn-lg bg-primary">regresar</a>
</form>
@endsection('content')

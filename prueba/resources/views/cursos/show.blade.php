@extends('layouts.plantilla')
@section('title','show'.$curso->name)
@section('content')
<a href="{{route('cursos.edit', $curso)}}">editar</a>
<h1><?php echo $curso->name;?> </h1>
<h2><?php echo $curso->descripcion;?> </h2>
<h3><?php echo $curso->categoria;?> </h3>
<a href="{{route('cursos.index')}}">regresar</a>
<form action="{{route('cursos.destroy',$curso)}}" method="post">
  @csrf
  @method('delete')
  <button type="submit">eliminar</button>
</form>
@endsection('content')

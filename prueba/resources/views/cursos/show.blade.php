@extends('layouts.plantilla')
@section('title','show'.$curso->name)
@section('content')
<a href="{{route('cursos.edit', $curso->id)}}">editar</a>
<h1>welcome to <?php echo $curso->name;?> </h1>
<a href="{{route('cursos.index')}}">regresar</a>
@endsection('content')

@extends('layouts.plantilla')
@section('title','Index')
@section('content')
<h1 class="text-3xl p-3">Lista de cursos</h1>
<a href="{{route('cursos.create')}}" class="btn btn-primary btn-lg bg-primary mx-3">crear curso</a>
<div class="list-group p-3">
  @foreach ($cursos as $item)
    <a href="{{ route('cursos.show', $item) }}" class="list-group-item list-group-item-action">{{$item->name}}</a>
  @endforeach
</div>
{{$cursos->links()}}
@endsection('content')

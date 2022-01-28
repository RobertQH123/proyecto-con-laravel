@extends('layouts.plantilla')
@section('title','Index')
@section('content')
<h1>Lista de cursos</h1>
<a href="{{route('cursos.create')}}">crear curso</a>
<ul>
  @foreach ($cursos as $item)
      <li>
        <a href="{{ route('cursos.show', $item) }}">{{$item->name}}</a>
        </li>
  @endforeach
</ul>
@endsection('content')

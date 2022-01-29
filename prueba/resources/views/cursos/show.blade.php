@extends('layouts.plantilla')
@section('title','show'.$curso->name)
@section('content')
<div class="max-w-sm rounded overflow-hidden shadow-lg m-auto">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"><?php echo $curso->name;?></div>
    <p class="font-semibold text-gray-700 text-lg">DESCRIPCIÓN:</p>
    <p class="text-gray-700 text-base"><?php echo $curso->descripcion;?></p> 
    <p class="font-semibold text-gray-700 text-lg">CATEGORIA:</p>
    <p class="text-gray-700 text-base"><?php echo $curso->categoria;?> </p> 
  </div>
  <div class="px-6 pt-4 pb-2">
    <a href="{{route('cursos.edit',$curso)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">editar</a>
    <form action="{{route('cursos.destroy',$curso)}}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">eliminar</button>
    </form>
    <a href="{{route('cursos.index')}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">regresar</a>
  </div>
</div>
@endsection('content')

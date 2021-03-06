@extends('layouts.plantilla')

@section('title','curso' . $curso->name)

@section('content')
<h1>Bienvenido al curso <?php echo $curso->name;?>  </h1>
<a href="{{route('cursos.index')}}">Volver a curso</a>
<br>
<a href="{{route('cursos.edit',$curso)}}">Editar curso</a>
    <p><strong>Categoria:</strong>{{$curso->categoria}}</p>
    <p><strong>Descripcion:</strong>{{$curso->descripcion}}</p>
<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection




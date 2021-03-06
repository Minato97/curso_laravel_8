@extends('layouts.plantilla')

@section('title','cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="post">

        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value={{old('name')}}>
        </label>

        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5" value=>{{old('descripcion')}}</textarea>

        </label>
        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value={{old('categoria')}}>
        </label>

        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection


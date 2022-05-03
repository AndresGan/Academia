@extends('layouts.app')

@section('titulo','listado de cursos')

@section('contenido')

    <h3 class="text-center">modificacion de curso</h3>
    <form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
        <label for="name">Modificar nombre del curso</label>
        <input id="name" class="form-control" type="text" name="nombre" value={{$cursito->nombre}}>
        </div>
        <div class="form-group">
            <label for="descrip">Ingresar una descripición</label>
            <input id="descrip" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cambiar imagen</label>
            <br>
            <input id="imagen"  type="file" name="imagen">
        </div>
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
@endsection
@extends('layouts.app')

@section('titulo','listado de cursos')

@section('contenido')

    <h3 class="text-center">Modificacion del docente</h3>
    <form action="/docentes/{{$docenti->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Modificar nombre del docente</label>
            <input id="name" class="form-control" type="text" name="nombre" value="{{$docenti->nombre}}">
        </div>
        <div class="form-group">
            <label for="descrip">Ingresar un titulo universitario</label>
            <input id="descrip" class="form-control" type="text" name="tituloUniversitario" value="{{$docenti->tituloUniversitario}}">
        </div>
        <div class="form-group">
            <label for="descrip">Ingresar edad</label>
            <input id="descrip" class="form-control" type="text" name="edad" value="{{$docenti->edad}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cambiar imagen</label>
            <br>
            <input id="imagen"  type="file" name="imagen">
        </div>
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
@endsection

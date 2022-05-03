@extends('layouts.app')

@section('titulo', 'Crear curso')

@section('contenido')

    <h3 class="text-center">Agregar nuevo docente</h3>
    <form action="/docentes" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
        <label for="name">Ingrese el nombre del docente</label>
        <input id="name" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
        <label for="age">Ingrese la edad del docente</label>
        <input id="age" class="form-control" type="text" name="edad">
        </div>
        <div class="form-group">
            <label for="descrip">Ingrese el titulo universitario</label>
            <input id="descrip" class="form-control" type="text" name="tituloUniversitario">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue una foto de perfil</label>
            <br>
            <input id="imagen"  type="file" name="imagen">
        </div>
        <button class="btn btn-primary" type="submit">Crear</button>
    </form>

@endsection
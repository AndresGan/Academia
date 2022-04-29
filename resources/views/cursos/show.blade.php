@extends('layouts.app')

@section('titulo', 'Detalle Cursos')

@section('contenido')
<div class="text-center">
<h1>Detalle del curso</h1>
<img style="height:150px; margin;15px; width:250px;" src="{{ Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
<br>
<p class="card-text text-center">{{$cursito->descripcion}}</p>
<br>
<a href="/cursos/{{$cursito->id}}/edit" class="btn btn-primary">Editar</a>
</div>
@endsection
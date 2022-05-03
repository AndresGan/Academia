@extends('layouts.app')

@section('titulo', 'Detalle del instructor')

@section('contenido')
<div class="text-center">
<h1>Detalle del instructor</h1>
<img style="height:150px; margin;15px; width:250px;" src="{{ Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
<br>
<p class="card-text text-center">{{$docenti->descripcion}}</p>
<br>
<a href="/docentes/{{$docenti->id}}/edit" class="btn btn-primary">Editar</a>
</div>
@endsection
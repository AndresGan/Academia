@extends('layouts.app')

@section('titulo','listado de docentes')

@section('contenido')
<h3 class="text-center">Listado de docentes</h3>
 {{--CON FOREACH HAGO EL RECORRIDO DEL ARRAY--}}
 <div class="row">
    @foreach ( $docenti as $alias )
        <div class="col-sm">
            <br>
            <div class="card text-center" style="width: 18rem; margin-top:20px">
                <img style="height:150px; margin;20px" src="{{ Storage::url($alias->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$alias->nombre}}</h5>
                  <p class="card-text text-center">{{$alias->tituloUniversitario}}</p>
                  <p class="card-text text-center">{{$alias->edad}} años</p>
                  <a href="/docentes/{{$alias->id}}/edit" class="btn btn-primary">Editar</a>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
@endsection
@extends('layouts.app')

@section('titulo','listado de cursos')

@section('contenido')
<br>
<p>Aqui estara el listado de cursos</p>
 {{--CON FOREACH HAGO EL RECORRIDO DEL ARRAY--}}
 <div class="row">
    @foreach ( $cursito as $alias )
        <div class="col-sm">
            <br>
            <br>
            <div class="card text-center" style="width: 18rem; margin-top:20px">
                <img style="height:150px; margin;20px" src="{{ Storage::url($alias->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$alias->nombre}}</h5>
                  <a href="/cursos/{{$alias->id}}" class="btn btn-primary">Ver mas</a>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
@endsection
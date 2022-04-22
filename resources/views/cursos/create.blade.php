{{-- en blade heredamos con @extends--}}
@extends('layouts.app')

@section('titulo', 'Crear curso')

@section('contenido')

    <h3 class="text-center">Creación de nuevo curso</h3>
    <form action="/cursos" method="POST">

        @csrf
        <div class="form-group">
        <label for="my-input">Ingrese el nombre del curso</label>
        <input id="my-input" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="my-input">Ingrese una descripición</label>
            <input id="my-input" class="form-control" type="text" name="descripcion">
        </div>
        <button class="btn btn-primary" type="submit">Crear</button>
    </form>

@endsection
{{-- esto era antes de heredar la plantilla
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Formulario para crear</title>
</head>
<body>
    <div class="container">
        <br>
        <h3 class="text-center">Creación de nuevo curso</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="my-input">Ingrese el nombre del curso</label>
                <input id="my-input" class="form-control" type="text" name="nombre">
            </div>
        </form>
    </div>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="my-input">Ingrese una descripición</label>
                <input id="my-input" class="form-control" type="text" name="descripcion">
            </div>
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>
</body>
</html>
--}}
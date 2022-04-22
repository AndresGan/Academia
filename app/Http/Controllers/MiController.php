<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MiController extends Controller{
    public function prueba() {
        return 'Estoy en un controlador';
    }

     public function saludo($nombre){
         return 'Hola mi nombre es ' . $nombre;
     }
}

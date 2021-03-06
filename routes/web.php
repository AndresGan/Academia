<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController;
use App\Http\Controllers\OtroController;
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\DocenteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('miprimeraruta', function () {
    return 'Bienvenidos aprendices';
});

Route::get('minombre/{nombre}/{edad}', function ($nombre,$edad) {
    return 'Hola mi nombre es: ' . $nombre . ' y mi edad es: '. $edad;
});

Route::get('heladeria/{topping}', [OtroController::class, 'helado']);

Route::get('precio/{precio}', [ControladorPrecios::class, 'precios']);

Route::get('nombre/{nombre}/precio/{precio}', [ControladorPrecios::class, 'getIVA']);

Route::resource('cursos', CursoController::class);

Route::get('nosotros',[InfoController::class,'info']);

Route::resource('docentes', DocenteController::class);
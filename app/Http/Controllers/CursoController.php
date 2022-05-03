<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //con el metodo all traigo toda la informacion de la tabla como un array 
        $cursito =  Curso::all();
        return view('cursos.index', compact('cursito'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('cursos.create');
    }

    /**
     * Almacena un nuevo registro creado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crear una instancia del modelo para manipular la tabla
        $cursito = new Curso();
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');

        /*
        validamos si viene un archivo desde el campo eqis..
        luego en el campo imagen almacenamos el nombre de el archivo que se va
        a guardar en storage/app/public e indicamos una subcarpeta de guardado oara ser mas ordenados
        */
        if ($request->hasFile('imagen')) {
            $cursito->imagen = $request->file('imagen')->store('public/cursos');

                }
        //Le digo que guarde la informacion anterior con save()
        $cursito->save();
        return 'Curso creado exitosamente';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursito = Curso::Find($id);
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito= Curso::where('id', $id)->firstOrFail();
        return view('cursos.edit',compact('cursito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cursito = Curso::find($id);
        //$cursito->fill($request->all());
        $cursito->fill($request->except('imagen'));
        if ($request->hasFile('imagen')) {
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        $cursito->save();
        return 'Curso actualizado correctamente';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursito = Curso::find($id);
        $urlImagenBD = $cursito->imagen;
        $rutaCompleta = public_path().$urlImagenBD;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        return $nombreImagen;

        //return $cursito;
    }

    //public function nosotros(){
     //   return view('varios.nosotros');
    //}
}

<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docenti = Docente::all();
        return view('docentes.indexd', compact('docenti'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docenti = new Docente();
        $docenti->nombre = $request->input('nombre');
        $docenti->edad = $request->input('edad');
        $docenti->tituloUniversitario = $request->input('tituloUniversitario');
        if ($request->hasFile('imagen')) {
            $docenti->imagen = $request->file('imagen')->store('public/docentes');
        }
        $docenti->save();
        return 'Docente agregado correctamente';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docenti = Docente::Find($id);
        return view('docentes.showd', compact('docenti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docenti= Docente::where('id', $id)->firstOrFail();
        return view('docentes.editd',compact('docenti'));
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
        $docenti = Docente::find($id);
        //$cursito->fill($request->all());
        $docenti->fill($request->except('imagen'));
        if ($request->hasFile('imagen')) {
            $docenti->imagen = $request->file('imagen')->store('public/docentes');
        }
        $docenti->save();
        return 'Informacion del docente actualizada correctamente correctamente';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

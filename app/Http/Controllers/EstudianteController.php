<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $estudiantes = Estudiante::all();
        return view('estudiante.index')->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $estudiantes = new Estudiante();
       $estudiantes-> id = $request ->get('id');
       $estudiantes-> nombre = $request ->get('nombre');
       $estudiantes-> carrera = $request ->get('carrera');
       $estudiantes-> estatura = $request ->get('estatura');
       $estudiantes-> edad = $request ->get('edad');

       $estudiantes ->save();
       return redirect('estudiantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiante.edit')->with('estudiante',$estudiante);
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
        $estudiante= Estudiante::find($id);

        $estudiante-> nombre = $request ->get('nombre');
        $estudiante-> carrera = $request ->get('carrera');
        $estudiante-> estatura = $request ->get('estatura');
        $estudiante-> edad = $request ->get('edad');
 
        $estudiante ->save();
        return redirect('estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);        
        $estudiante->delete();

        return redirect('/estudiantes');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = Inscripcion::all();
        return view('inscripcion.index', ['inscripciones' => $inscripciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inscripciones = DB::table('inscripciones');
        return view('inscripcion.new', ['inscripciones' => $inscripciones]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inscripcion = new Inscripcion();   
        $inscripcion->curso_id = $request->curso_id;
        $inscripcion->instructor_id = $request->instructor_id;
        $inscripcion->estudiante_id = $request->estudiante_id;
        $inscripcion->fecha_inscripción = $request->fecha_inscripción; 
        $inscripcion->save();

        $inscripciones = DB::table('inscripciones')->get();

        return redirect()->route('inscripciones.index')->with('success', 'inscripcion creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripciones = DB::table('inscripciones')->get();
        return view('inscripcion.edit', compact('inscripcion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inscripcion = Inscripcion::find($id);

        $inscripcion->curso_id = $request->curso_id;
        $inscripcion->instructor_id = $request->instructor_id;
        $inscripcion->estudiante_id = $request->estudiante_id;
        $inscripcion->fecha_inscripción = $request->fecha_inscripción; 
        $inscripcion->save();

        $inscripciones = DB::table('inscripciones')->get();
        return redirect()->route('inscripciones.index')->with('success', 'inscripcion editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete();
        return redirect()->route('inscripciones.index')->with('success', 'inscripcion eliminada exitosamente.');
    }
}

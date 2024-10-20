<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index', ['estudiantes' => $estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiantes = DB::table('estudiantes');
        return view('estudiante.new', ['estudiantes' => $estudiantes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();   
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->nivel_educativo = $request->nivel_educativo; 
        $estudiante->save();

        $estudiantes = DB::table('estudiantes')->get();

        return redirect()->route('estudiantes.index')->with('success', 'estudiante creado exitosamente.');
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
        $estudiante = Estudiante::find($id);
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::find($id);

        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->nivel_educativo = $request->nivel_educativo; 
        $estudiante->save();

        $estudaintes = DB::table('estudiantes')->get();
        return redirect()->route('estudiantes.index')->with('success', 'estudiante editado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'estudiante eliminado exitosamente.');
    }
}

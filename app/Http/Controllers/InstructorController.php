<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructores = Instructor::all();
        return view('instructor.index', ['instructores' => $instructores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructores = DB::table('instructores');
        return view('instructor.new', ['instructores' => $instructores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $instructor = new Instructor();   
        $instructor->nombre = $request->nombre;
        $instructor->apellido = $request->apellido;
        $instructor->especialidad = $request->especialidad;
        $instructor->biografía = $request->biografía; 
        $instructor->save();

        $instructores = DB::table('instructores')->get();

        return redirect()->route('instructores.index')->with('success', 'instructor creado exitosamente.');
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
        $instructor = Instructor::find($id);
        $instructores = DB::table('instructores')->get();
        return view('instructor.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $instructor = Instructor::find($id);

        $instructor->nombre = $request->nombre;
        $instructor->apellido = $request->apellido;
        $instructor->especialidad = $request->especialidad;
        $instructor->biografía = $request->biografía; 
        $instructor->save();

        $instructores = DB::table('instructores')->get();

        return redirect()->route('instructores.index')->with('success', 'instructor editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructor = Instructor::find($id);
        $instructor->delete();
        return redirect()->route('instructores.index')->with('success', 'instructor eliminado exitosamente.');
    }
}

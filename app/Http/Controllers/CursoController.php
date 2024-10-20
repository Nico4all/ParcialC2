<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;
 

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('curso.index', ['cursos' => $cursos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = DB::table('cursos');
        return view('curso.new', ['cursos' => $cursos]);
    }



    public function store(Request $request)
    {
        $curso = new Curso();   
        $curso-> título= $request->título;
        $curso->descripción = $request->descripción;
        $curso->duración = $request->duración;
        $curso->precio = $request->precio; 
        $curso->categoría = $request->categoría; 
        $curso->save();

        $cursos = DB::table('cursos')->get();

        return redirect()->route('cursos.index')->with('success', 'curso creado exitosamente.');
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
        $curso = Curso::find($id);
        $cursos = DB::table('cursos')->get();
        return view('curso.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);
        $curso-> título= $request->título;
        $curso->descripción = $request->descripción;
        $curso->duración = $request->duración;
        $curso->precio = $request->precio; 
        $curso->categoría = $request->categoría; 
        $curso->save();

        $cursos = DB::table('cursos')->get();

        return redirect()->route('cursos.index')->with('success', 'curso editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'curso eliminado exitosamente.');
    }
}

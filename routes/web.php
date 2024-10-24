<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\InscripcionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rutas de cursos
    Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
    Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
    Route::delete('/cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
    Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
    Route::get('/cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

    //Rutas de Estudiantes
    Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
    Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');
    Route::get('/estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');
    Route::delete('/estudiantes/{estudiante}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');
    Route::put('/estudiantes/{estudiante}', [EstudianteController::class, 'update'])->name('estudiantes.update');
    Route::get('/estudiantes/{estudiante}/edit', [EstudianteController::class, 'edit'])->name('estudiantes.edit');

    //Rutas Instructores
    Route::get('/instructores', [InstructorController::class, 'index'])->name('instructores.index');
    Route::post('/instructores', [InstructorController::class, 'store'])->name('instructores.store');
    Route::get('/instructores/create', [InstructorController::class, 'create'])->name('instructores.create');
    Route::delete('/instructores/{instructor}', [InstructorController::class, 'destroy'])->name('instructores.destroy');
    Route::put('/instructores/{instructor}', [InstructorController::class, 'update'])->name('instructores.update');
    Route::get('/instructores/{instructor}/edit', [InstructorController::class, 'edit'])->name('instructores.edit');


    //Rutas Inscripciones
    Route::get('/inscripciones', [InscripcionController::class, 'index'])->name('inscripciones.index');
    Route::post('/inscripciones', [InscripcionController::class, 'store'])->name('inscripciones.store');
    Route::get('/inscripciones/create', [InscripcionController::class, 'create'])->name('inscripciones.create');
    Route::delete('/inscripciones/{inscripcion}', [InscripcionController::class, 'destroy'])->name('inscripciones.destroy');
    Route::put('/inscripciones/{inscripcion}', [InscripcionController::class, 'update'])->name('inscripciones.update');
    Route::get('/inscripciones/{inscripcion}/edit', [InscripcionController::class, 'edit'])->name('inscripciones.edit');
});

require __DIR__ . '/auth.php';

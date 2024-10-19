<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curso_id');  // asegúrate que sea unsignedBigInteger
            $table->unsignedBigInteger('instructor_id');  // idem
            $table->unsignedBigInteger('estudiante_id');  // idem
            $table->date('fecha_inscripción');
            $table->timestamps();

            // Definición de claves foráneas
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('instructor_id')->references('id')->on('instructores')->onDelete('cascade');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('_inscripciones');
    }
};

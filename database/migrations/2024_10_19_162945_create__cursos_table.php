<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('título');
            $table->text('descripción')->nullable();
            $table->integer('duración'); // asumiendo que la duración es en horas
            $table->decimal('precio', 8, 2);
            $table->string('categoría');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_cursos');
    }
};

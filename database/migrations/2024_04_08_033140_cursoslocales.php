<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('CursosLocales', function (Blueprint $table) {
            $table->string('idCursoLocal', 9)->primary(); //ASUC00316 ó E10300015 (malla 2024)
            $table->integer('periodoCursoLocal')->unsigned(); // 4
            $table->string('nombreCursoLocal', 60); //Estructura de datos
            $table->integer('horasTeoricasCursoLocal')->unsigned(); // 2
            $table->integer('horasPracticasCursoLocal')->unsigned(); // 2
            $table->integer('creditosCursoLocal')->unsigned();// 3
            $table->string('tipoCursoLocal', 15); // Obligatorio o Electivo  
            $table->timestamps(); //created_at updated_at
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CursosLocales');
    }
};

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
        Schema::create('Cursos', function (Blueprint $table) {
            $table->string('idCurso', 5)->primary(); 
            $table->string('nombreCurso');
            $table->string('ciclo');
            $table->string('creditos');  
            $table->string('silabo'); 
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cursos');
    }
};

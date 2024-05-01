<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Carreras_Cursos', function (Blueprint $table) {
            $table->increments('id_CarrerasCursos'); // id autoincremental y clave primaria
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Carreras_Cursos');
    }
};

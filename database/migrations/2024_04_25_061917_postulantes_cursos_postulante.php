<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Postulantes_CursosPostulante', function (Blueprint $table) {
            $table->increments('id_PostulantesCursosPostulante'); // id autoincremental y clave primaria
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Postulantes_CursosPostulante');
    }
};

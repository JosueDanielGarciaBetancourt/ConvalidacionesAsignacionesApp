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
        Schema::create('Postulante', function (Blueprint $table) {
            $table->string('idPostulante', 8)->primary(); //8 caracteres máximo
            $table->string('nombre'); //255 caracteres máximo
            $table->string('carrera'); //255 caracteres máximo
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Postulante');
    }
};

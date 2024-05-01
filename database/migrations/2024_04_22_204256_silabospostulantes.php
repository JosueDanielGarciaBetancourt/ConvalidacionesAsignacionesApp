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
        Schema::create('SilabosPostulantes', function (Blueprint $table) {
            $table->string('idSilaboPostulante', 15)->primary(); //curso123-2024
            $table->text('sumillaSilaboPostulante');
            $table->text('referenciasSilaboPostulante');
            $table->integer('anioSilaboPostulante')->unsigned();
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SilabosPostulantes');
    }
};

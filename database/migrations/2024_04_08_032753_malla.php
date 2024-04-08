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
        Schema::create('Malla', function (Blueprint $table) {
            $table->string('idMalla', 10)->primary(); // ID con hasta 10 caracteres máximo
            $table->string('nombre'); //255 caracteres máximo
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Malla');
    }
};

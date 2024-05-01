<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Carreras', function (Blueprint $table) {
            $table->string('idCarrera', 3)->primary(); //103 (Ing. Sistemas)
            $table->string('nombreCarrera', 100);
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Carreras');
    }
};

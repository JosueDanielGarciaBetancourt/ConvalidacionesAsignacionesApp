<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ReportesConvalidaciones', function (Blueprint $table) {
            $table->string('idReporteConvalidacion', 15)->primary(); //Rep001-77043114
            $table->datetime('fechaHoraReporteConvalidacion');
            $table->text('rutaArchivoPDF');
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ReportesConvalidaciones');
    }
};

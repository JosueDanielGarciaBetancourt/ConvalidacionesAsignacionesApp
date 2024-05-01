<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ReporteConvalidacion;


class ReporteConvalidacionFactory extends Factory
{
    protected $model = ReporteConvalidacion::class;


    public function definition(): array
    {
        $IDReporteConvalidacion = $this->faker->unique()->regexify('Rep0[0-2]{1}[0-9]{1}-[1-9]{8}');
        
        return [
            'idReporteConvalidacion' => $IDReporteConvalidacion,
            'fechaHoraReporteConvalidacion' => $this->faker->dateTimeBetween('2023-01-01', '+17 years'),
            'rutaArchivoPDF' => "C:\\ConvalidacionesUC\\HistorialPDF's\\$IDReporteConvalidacion.pdf",
        ];
    }
}

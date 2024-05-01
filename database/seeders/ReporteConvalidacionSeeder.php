<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReporteConvalidacion;

class ReporteConvalidacionSeeder extends Seeder
{

    public function run(): void
    {
        ReporteConvalidacion::factory(10)->create();
    }
}

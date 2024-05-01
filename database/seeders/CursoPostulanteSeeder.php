<?php

namespace Database\Seeders;

use App\Models\CursoPostulante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoPostulanteSeeder extends Seeder
{

    public function run(): void
    {
        CursoPostulante::factory(30)->create();
    }
}

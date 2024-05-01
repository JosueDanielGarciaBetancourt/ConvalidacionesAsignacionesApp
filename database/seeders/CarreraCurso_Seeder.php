<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarreraCurso;


class CarreraCurso_Seeder extends Seeder
{
    public function run(): void
    {
        $carrera_curso1 = new CarreraCurso;
        $carrera_curso1->save();
        
        $carrera_curso2 = new CarreraCurso;
        $carrera_curso2->save();
        // $table->increments('id_CarrerasCursos'); // id autoincremental y clave primaria
        // $table->timestamps(); //created_at updated_at
    }
}

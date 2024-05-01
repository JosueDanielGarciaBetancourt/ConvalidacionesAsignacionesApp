<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostulanteCursoPostulante;


class PostulanteCursoPostulante_Seeder extends Seeder
{
    public function run(): void
    {
        $postulanteCursoPostulante1 = new PostulanteCursoPostulante;
        $postulanteCursoPostulante1->save();

        $postulanteCursoPostulante2 = new PostulanteCursoPostulante;
        $postulanteCursoPostulante2->save();
    }
}

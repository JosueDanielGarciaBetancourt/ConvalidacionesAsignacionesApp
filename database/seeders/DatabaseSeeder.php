<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {   
        $this->call(UserSeeder::class);
        $this->call(CursoLocalSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(MallaSeeder::class);
        $this->call(PostulanteSeeder::class);
        $this->call(ReporteConvalidacionSeeder::class);
        $this->call(CursoPostulanteSeeder::class);
        $this->call(SilaboLocalSeeder::class);
        $this->call(SilaboPostulanteSeeder::class);
        $this->call(CarreraCurso_Seeder::class);
        $this->call(PostulanteCursoPostulante_Seeder::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\PostulanteCursoPostulante;
use Illuminate\Database\Seeder;
use App\Models\User;  

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {   
        User::factory(5)->create();
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

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Postulante;

class PostulanteSeeder extends Seeder
{
    public function run(): void
    {
        Postulante::factory(20)->create();
    }
}

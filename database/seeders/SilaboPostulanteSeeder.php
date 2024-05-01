<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SilaboPostulante;

class SilaboPostulanteSeeder extends Seeder
{
    public function run(): void
    {   
        SilaboPostulante::factory(20)->create();
    }
}

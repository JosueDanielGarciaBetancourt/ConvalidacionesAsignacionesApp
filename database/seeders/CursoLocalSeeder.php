<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CursoLocal;

class CursoLocalSeeder extends Seeder
{
    public function run(): void
    {
       CursoLocal::factory(50)->create();
    }
}


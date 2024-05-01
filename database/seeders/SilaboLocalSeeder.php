<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SilaboLocal;

class SilaboLocalSeeder extends Seeder
{
    public function run(): void
    {
        SilaboLocal::factory(20)->create();
    }
}

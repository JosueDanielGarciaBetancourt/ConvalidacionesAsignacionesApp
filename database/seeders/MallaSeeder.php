<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Malla;

class MallaSeeder extends Seeder
{
    public function run(): void
    {
        $malla1 = new Malla;
        $malla2 = new Malla;
        $malla3 = new Malla;

        $malla1->idMalla = 'Malla01'; 
        $malla1->anioMalla = 2015;
        
        $malla2->idMalla = 'Malla02'; 
        $malla2->anioMalla = 2018;

        $malla3->idMalla = 'Malla03'; 
        $malla3->anioMalla = 2024;

        $malla1->save();
        $malla2->save();
        $malla3->save();
    }
}

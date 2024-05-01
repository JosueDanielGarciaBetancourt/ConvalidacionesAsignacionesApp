<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrera;
use Illuminate\Validation\Rules\Can;

class CarreraSeeder extends Seeder
{
    public function run(): void
    {
        //Carrera::factory(50)->create();
        $carrera1 = new Carrera;
        $carrera2 = new Carrera;
        $carrera3 = new Carrera; 
        $carrera4 = new Carrera;
        
        $carrera1->idCarrera = '103'; 
        $carrera1->nombreCarrera = 'Ingeniería de sistemas e informática';
        
        $carrera2->idCarrera = '105';
        $carrera2->nombreCarrera = 'Ingeniería Ambiental';

        $carrera3->idCarrera = '108';
        $carrera3->nombreCarrera = 'Ingeniería Civil';
        
        $carrera4->idCarrera = '110';
        $carrera4->nombreCarrera = 'Ingeniería Mecánica';

        $carrera1->save();
        $carrera2->save();
        $carrera3->save();
        $carrera4->save();
    }
}

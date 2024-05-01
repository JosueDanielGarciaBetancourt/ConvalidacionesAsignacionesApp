<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CursoPostulante;

class CursoPostulanteFactory extends Factory
{
    protected $model = CursoPostulante::class;

    public function definition(): array
    {   
        return [
            'idCursoPostulante' => $this->faker->unique()->regexify('[A-Za-z0-9]{1,10}'),
            'nombreCursoPostulante' => $this->faker->sentence(3),
            'periodoCursoPostulante' => $this->faker->numberBetween(1, 10),
            'estadoCursoPostulante' => $this->faker->randomElement([1, 0]),
         ];
    }
}

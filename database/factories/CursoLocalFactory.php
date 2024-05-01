<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CursoLocal;

class CursoLocalFactory extends Factory
{
    protected $model = CursoLocal::class;
    
    public function definition(): array
    {
        return [
            'idCursoLocal' => $this->faker->unique()->regexify('ASUC00[1-9]{3}'), //ASUC00###
            'periodoCursoLocal' => $this->faker->numberBetween(1, 10), // Ejemplo: Periodo académico entre 1 y 10
            'nombreCursoLocal' => $this->faker->text(60), // Oración random
            'horasTeoricasCursoLocal' => $this->faker->numberBetween(1, 2), // Ejemplo: Entre 1 y 2 horas teóricas
            'horasPracticasCursoLocal' => $this->faker->numberBetween(1, 3), // Ejemplo: Entre 1 y 3 horas prácticas
            'creditosCursoLocal' => $this->faker->numberBetween(1, 5), // Ejemplo: Entre 1 y 5 créditos
            'tipoCursoLocal' => $this->faker->randomElement(['Obligatorio', 'Electivo']),
        ];
    }
}


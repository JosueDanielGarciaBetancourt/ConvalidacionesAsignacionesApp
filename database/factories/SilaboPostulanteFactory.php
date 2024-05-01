<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SilaboPostulante;


class SilaboPostulanteFactory extends Factory
{
    protected $model = SilaboPostulante::class;

    public function definition(): array
    {   
        $anio = $this->faker->numberBetween(2023,2040);

        return [
            'idSilaboPostulante' => $this->faker->unique()->regexify("[A-Za-z0-9]{1,10}-$anio"),
            'sumillaSilaboPostulante' => $this->faker->text(), 
            'referenciasSilaboPostulante' => $this->faker->text(),
            'anioSilaboPostulante' => $anio,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Postulante;

class PostulanteFactory extends Factory
{
    protected $model = Postulante::class;

    public function definition(): array
    {   
        return [
            'idPostulante' => $this->faker->unique()->regexify('[1-9]{8}'), 
            'nombrePostulante' => $this->faker->name(), 
            'carreraProcedenciaPostulante' => $this->faker->sentence(3),
            'institucionProcedenciaPostulante' => $this->faker->randomElement(['SENATI','Instituto Continental', 'Universidad Continental', 'UTP', 'UNCP', 'UPLA']), 
        ];
    }
}

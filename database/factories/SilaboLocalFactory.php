<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SilaboLocal;


class SilaboLocalFactory extends Factory
{
    protected $model = SilaboLocal::class;

    public function definition(): array
    {   
        $anio = $this->faker->numberBetween(2023, 2040);

        return [
            'idSilaboLocal' => $this->faker->unique()->regexify("ASUC00[1-9]{3}-$anio"), //ASUC00316-2024
            'sumillaSilaboLocal' => $this->faker->text(), 
            'referenciasSilaboLocal' => $this->faker->text(),
            'anioSilaboLocal' => $anio,
        ]; 
    }
}

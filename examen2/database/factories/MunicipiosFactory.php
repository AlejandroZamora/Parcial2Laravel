<?php

namespace Database\Factories;

use App\Models\Departamentos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Municipios>
 */
class MunicipiosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion'=>$this->faker->city,
            'departamentoId'=> Departamentos::factory(),
        ];
    }
}

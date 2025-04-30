<?php

namespace Database\Factories;

use App\Models\Municipios;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carnet'=>$this->faker->unique()->numerify('AL-####'),
            'nombre'=>$this->faker->firstName,
            'apellidos'=>$this->faker->lastName,
            'telefono'=>$this->faker->phoneNumber,
            'correo'=>$this->faker->unique()->safeEmail,
            'direccion'=>$this->faker->address(),
            'municipioId'=>Municipios::factory(),
        ];
    }
}

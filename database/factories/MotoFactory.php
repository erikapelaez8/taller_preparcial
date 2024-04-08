<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Moto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Moto>
 */
class MotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marca' => $this->faker->word(),
            'modelo' => $this->faker->word(),
            'cilindraje' => $this->faker->numberBetween(100,2000),
            'ano' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'descripcion' => $this->faker->sentence,
            'precio' => $this->faker->randomFloat(2, 1000, 10000),
            'categoria' => $this->faker->randomElement(['deportiva', 'naked', 'custom', 'touring']),
            'color' => $this->faker->randomElement(['blanco', 'negro', 'gris', 'azul', 'amarillo', 'rojo']),
        ];
    }
}

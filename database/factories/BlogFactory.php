<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ruta' => fake()->imageUrl(),
            'tipo' => fake()->randomElement($array = array('BUSINESS', 'DEVELOPMENT')),
            'nombre' => fake()->name(),
            'descri' => fake()->sentence($nbWords = 20, $variableNbWords = true),
            'ruta_u' => fake()->imageUrl(),
            'nombre_u' => fake()->name(),
            'fecha' => fake()->date(),
        ];
    }
}

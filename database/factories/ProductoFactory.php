<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->text($maxNbChars = 40),
            'cantidad' => fake()->numberBetween($min = 1, $max = 300),
            'precio' =>fake()->numberBetween($min = 1, $max = 300),
            'estado' => 'A'
        ];
    }
}

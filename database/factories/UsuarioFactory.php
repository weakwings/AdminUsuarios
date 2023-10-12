<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'nome' => $this->faker->firstName,
        'sobrenome' => $this->faker->lastName,
        'email' => $this->faker->unique()->safeEmail,
        'data_registro' => now(),
    ];
}
}

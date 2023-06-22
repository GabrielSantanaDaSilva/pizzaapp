<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClienteEndereco>
 */
class ClienteEnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_cliente' => fake()->numberBetween(1,50),
            'id_endereco' => fake()->numberBetween(1,50),
            'observacoes' => fake()->paragraph(),
        ];
    }
}

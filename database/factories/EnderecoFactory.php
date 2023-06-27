<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'endereco' => fake()->address(),
            'numero' => fake()->numberBetween(1,1000),
            'complemento' => fake()->randomLetter(),
            'bairro' => fake()->word(),
            'cidade' => fake()-> city(),
            'uf' => 'SP',
            'cep' => fake()->numberBetween(1,1000),
            'observacoes' => fake()->paragraph(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProdutoTamanho>
 */
class ProdutoTamanhoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_produto' => fake()->numberBetween(1,100),
            'id_tamanho' => 1,
            'preco' => fake()->numberBetween(10,500),
            'observacoes' => fake()->text(200)
        ];
    }
}

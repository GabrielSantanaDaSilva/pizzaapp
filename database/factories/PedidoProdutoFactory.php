<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PedidoProduto>
 */
class PedidoProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pedido' => fake()->numberBetween(1,50),
            'id_user' => fake()->numberBetween(1,21),
            'id_produto_tamanho' => '1',
            'preco' => fake()->numberBetween(50,200),
            'qtd' => fake()->numberBetween(1,15),
            'subtotal' => fake()->numberBetween(50,3000),
            'observacoes' => fake()->paragraph(),

        ];
    }
}

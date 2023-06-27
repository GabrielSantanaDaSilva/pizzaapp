<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'id_tipo_pedido' => '1',
            'id_user' => fake()->numberBetween(1,21),
            'id_cliente' => fake()->numberBetween(1,50),
            'cliente_endereco' => fake()->numberBetween(1,50),
            'id_status' => '1',
            'id_tipo_pagamento' => '1',
            'total' => fake()->numberBetween(50,200),
            'observacoes' => fake()->paragraph(),

        ];
    }
}

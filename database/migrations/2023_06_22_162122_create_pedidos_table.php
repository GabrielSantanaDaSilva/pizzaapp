<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id_pedido');
            $table->integer('id_tipo_pedido');
            $table->bigInteger('id_user');
            $table->integer('id_cliente');
            $table->integer('cliente_endereco');
            $table->integer('id_status');
            $table->integer('id_tipo_pagamento');
            $table->decimal('total',10,2)
                                ->default(0)
                                    ->nullable();
            $table->text('observacoes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};

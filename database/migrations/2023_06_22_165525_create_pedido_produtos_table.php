<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos_produtos', function (Blueprint $table) {
            $table->increments('id_pedido_produto');
            $table->bigInteger('id_user');
            $table->integer('id_pedido');
            $table->integer('id_produto');
            $table->decimal('preco',10,2)->nullable();
            $table->decimal('qtd',10,2);
            $table->decimal('subtotal',10,2);
            $table->text('observacoes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_produtos');
    }
};

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
        Schema::create('produtos_tamanhos', function (Blueprint $table) {
            $table->increments('id_produto_tamanho');
            $table->integer('id_produto');
            $table->integer('id_tamanho')->default(1);
            $table->decimal('preco',10,2)->default(0);
            $table->text('observacoes')->nullable;
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_tamanhos');
    }
};

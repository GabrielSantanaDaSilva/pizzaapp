<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{

        Pedido,
        ProdutoTamanho,
        User,
    };





class PedidoProduto extends Model
{
    use HasFactory, SoftDeletes;


    use HasFactory, SoftDeletes;

    protected $table = 'pedidos_produtos';
    protected $primaryKey = 'id_pedido_produto';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // Campos Vísiveis/Manipulaveis fora da classe
    protected $fillable = [


        'id_user',
        'id_pedido',
        'id_produto_tamanho',
        'preco',
        'qtd',
        'subtotal',
        'observacoes',


    ];

    // Relacionamentos

   public function usuario() : object {
            return $this->belongsTo(User::class,
                                    'id_user',
                                    'id_user');
    }

   public function pedido() : object {
            return $this->belongsTo(Pedido::class,
                                    'id_pedido',
                                    'id_pedido');
    }

   public function produto() : object {
            return $this->belongsTo(ProdutoTamanho::class,
                                    'id_endereco',
                                    'id_endereco');
    }

}

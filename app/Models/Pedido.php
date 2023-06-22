<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Cliente,
    ClienteEndereco,
    PedidoProduto,
    Status,
    TipoPagamento,
    TipoPedido,
    User,
};

class Pedido extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // Campos Vísiveis/Manipulaveis fora da classe
    protected $fillable = [

        'id_tipo_pedido',
        'id_user',
        'id_cliente',
        'id_cliente_endereco',
        'id_status',
        'id_tipo_pagamento',
        'total',
        'observacoes',


    ];

    // Relacionamentos

   public function usuario() : object {
            return $this->belongsTo(User::class,
                                    'id_user',
                                    'id_user');
    }

   public function cliente() : object {
            return $this->belongsTo(cliente::class,
                                    'id_cliente',
                                    'id_cliente');
    }

   public function endereco() : object {
            return $this->belongsTo(Endereco::class,
                                    'id_endereco',
                                    'id_endereco');
    }

   public function status() : object {
            return $this->belongsTo(Status::class,
                                    'id_status',
                                    'id_status');
    }

   public function tipoPedido() : object {
            return $this->belongsTo(tipoPedido::class,
                                    'id_tipo_pedido',
                                    'id_tipo_pedido');
    }

   public function tipoPagamento() : object {
            return $this->belongsTo(tipoPagamento::class,
                                    'id_tipo_pagamento',
                                    'id_tipo_pagamento');
    }

   public function produtos() : object {
            return $this->belongsTo(pedidoProduto::class,
                                    'id_pedido',
                                    'id_pedido');
    }


}

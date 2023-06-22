<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // Campos Vísiveis/Manipulaveis fora da classe
    protected $fillable = [

        'nome',
        'ddd',
        'celular',
        'email',
        'observacoes',

    ];

    // Relacionamentos

//    public function usuarios() : object {
//             return $this->belongsTo(User::class,
//                                     'id_cargo',
//                                     'id_cargo');
//     }
}

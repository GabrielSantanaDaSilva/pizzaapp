<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tamanho extends Model
{
    use SoftDeletes;

    protected $table = 'tipos_tamanhos';
    protected $primaryKey = 'id_tamanho';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [

        'tipo_tamanho'

    ];
}

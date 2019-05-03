<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcnotavaloracion extends Model
{
    protected $table='hcnotavaloracion';
    protected $fillable = [
        'fecha',
        'eva',
        'pruebasf',
        'actividadf',
        'fuerza',
        'rom',
        'id_f'
    ];
}

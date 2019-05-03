<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class hcda extends Model
{
    protected $table='hcda';
    protected $fillable = [
        'diagant',
        'estudiog',
        'tratamientosant',
        'inquietudsub',
        'id_f'
    ];
}

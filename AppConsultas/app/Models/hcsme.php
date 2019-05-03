<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcsme extends Model
{
    protected $table='hcsme';
    protected $fillable = [
        'columna',
        'miembrosuperior',
        'miembroinferior',
        'id_f'
    ];
}

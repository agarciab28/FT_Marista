<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcpadeactual extends Model
{
    protected $table='hcpadecimientoactual';
    protected $fillable = [
        'inicio',
        'evolucion',
        'actual',
        'id_f'
    ];
}

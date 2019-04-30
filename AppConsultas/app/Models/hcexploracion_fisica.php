<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class hcexxploracion_fisica extends Model
{
    protected $table='hcexploracionfisica';
    protected $fillable = [
        'ta',
        'fc',
        'fr',
        'temp',
        'talla',
        's02',
        'pesoactual',
        'pesoanterior',
        'pesoideal',
        'imc',
        'curp'
    ];
}

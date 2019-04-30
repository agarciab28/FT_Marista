<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcapnp extends Model
{
    protected $table='hcapnp';
    protected $fillable = [
    'eninin',
    'intervencionesq',
    'traumatismos',
    'infiltraciones',
    'hospitalizaciones',
    'perdidadeconocimiento',
    'intoleranciamed',
    'transfusiones',
    'medicamentos',
     'curp'
    ];
}

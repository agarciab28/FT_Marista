<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class hcexxploracion_general extends Model
{
    protected $table='hcexploraciongeneral';
    protected $fillable = [
            'estadodecon',
            'actitud',
            'movimientosanormales',
            'postura',
            'marcha',
            'estadogdn',
            'fuerzamuscular',
            'pruebasfuncionales',
            'curp'
    ];
}

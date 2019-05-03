<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class hcexploracion_general extends Model
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
            'id_f'
    ];
}

<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class hcexploracion_por_region extends Model
{
    protected $table='hcexploracionporregion';
    protected $fillable = [
        'pielyanexo',
        'cabeza',
        'ojos',
        'oidos',
        'narizyseno',
        'boca',
        'torax',
        'vasossanguineos',
        'mamas',
        'genitales',
        'abdomen',
        'otros',
        'id_f'
    ];
}

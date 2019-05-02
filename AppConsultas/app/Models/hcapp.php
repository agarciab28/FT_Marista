<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcapp extends Model
{
    protected $table='hcapp';
    protected $fillable = [
        'tipoconstruccionnf',
        'suelonoregular',
        'escalaresda',
        'ventilacionina',
        'hacinamiento',
        'adaptacionesyaux',
        'serviciosdeagua',
        'serviciosdeluz',
        'serviciosd',
        'habitospersonalesb',
        'higienebucal',
        'defecacion',
        'tabaquismo',
        'alcoholismo',
        'toxicomanias',
        'alimentacion',
        'inmunizaciones',
        'trabajodescanso',
        'pasatiempo',
        'deporte',
        'id_f'

    ];
}

<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcays extends Model
{
    protected $table='hcays';
    protected $fillable = [
        'aparatodigestivo',
        'aparatocardiovas',
        'aparatorespiratorio',
        'aparatourinario',
        'aparatogenital',
        'aparatohematologico',
        'aparatoendocrino',
        'aparatonervioso',
        'aparatosensorial',
        'aparatoosteomuscu',
        'curp'
    ];
}

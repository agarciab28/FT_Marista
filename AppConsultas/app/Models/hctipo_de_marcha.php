<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hctipo_de_marcha extends Model
{
    protected $table='hctipoDeMarcha';
    protected $fillable = [
    'hemipareticaHemiplejica',
    'cerebelosaAtáxica',
    'paraparetica',
    'hipocineticaParkinsoniana',
    'vestibular',
    'marchaCoreas',
    'marchaSensorial',
    'marchaMiopatias',
    'marchaHisterica',
    'id_f'

    ];
}

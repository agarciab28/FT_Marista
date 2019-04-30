<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hchf extends Model
{
    protected $table='hchf';
    protected $fillable = [
        'enfermedadesreumatologicas',
        'enfermadessn',
        'sindromes',
        'malformaciones',
        'congenitas',
        'diabetes',
        'hipertensionas',
        'cancer',
        'cardiopatias',
        'vasculares',
        'pulmonares',
        'heptopatias',
        'nefropatias',
        'digestivos',
        'endrocrinopatias',
        'transtornosh',
        'dislipidemias',
        'otros',
        'curp'
    ];
}

<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcago extends Model
{
    protected $table='hcago';
    protected $fillable = [
             'menarca',
             'ritmomenstrual',
             'partos',
             'abortos',
             'cesareas',
             'metodoanticoncept',
             'fum',
             'ivsa',
             'curp'

    ];
}

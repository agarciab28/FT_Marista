<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcsintoasgenerales extends Model
{
    protected $table='hcsintomasgenerales';
    protected $fillable = [
        'astonia',
        'adinamia',
        'anorexia',
        'fiebre',
        'perdidadepeso',
        'curp'
    ];
}

<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcparnervio extends Model
{
    protected $table='hcparnervio';
    protected $fillable = [
        'parte',
        'escaladeashworth',
        'reflejososteo',
        'tipodemarcha',
        'curp'
    ];
}

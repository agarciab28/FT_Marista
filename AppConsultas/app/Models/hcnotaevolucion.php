<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hcnotaevolucion extends Model
{
    protected $table='hcnotaevolucion';
    protected $fillable = [
        'fecha',
        'nota',
        'id_f'
    ];
}

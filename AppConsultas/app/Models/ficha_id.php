<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ficha_id extends Model
{
    //
    protected $table='ficha_de_identificacion';
    protected $fillable = [
      'nombre',
      'apellido',
      'edad',
      'sex',
      'nacionalidad',
      'est_civ',
      'ocupacion',
      'calle',
      'num',
      'colonia',
      'tel1',
      'celular',
      'religion',
      'curp',
      'nombre2',
      'tel2',
      'motivo'
    ];
}

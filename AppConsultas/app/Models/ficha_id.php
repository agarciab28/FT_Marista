<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ficha_id extends Model
{
    //
    protected $table='ficha_de_identificacion';
    protected $fillable = [
      'curp',
      'nombre',
      'apellidoP',
      'apellidoM',
      'edad',
      'sexo',
      'nacionalidad',
      'estadoCivil',
      'ocupacion',
      'calle',
      'num_int',
      'num_ext',
      'colonia',
      'ciudad',
      'estado',
      'telTrabajo',
      'celular',
      'religion',
      'familiaAC',
      'celAC',
      'motivoDeConsulta'

    ];
}

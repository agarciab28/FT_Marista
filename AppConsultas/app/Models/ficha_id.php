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
      /*  'nombre',
        'apellido_p',
        'apellido_m',
        'edad',
        'sex',
        'nacionalidad',
        'est_civ',
        'ocupacion',
        'calle',
        'numero_int',
        'numero_ext',
        'colonia',
        'ciudad',
        'estado',
        'tel1',
        'celular',
        'religion',
        'curp',
        'nombre2',
        'tel2',
        'motivo'*/
    ];
}

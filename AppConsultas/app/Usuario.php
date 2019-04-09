<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table='usuario';
    protected $fillable = [
        'curp',
        'nombre',
        'password',
        'apellidoP',
        'apellidoM',
        'telefono' ,  
        'correoElectronico',
        'nombreDeUsuario',
        'tipoDeUsuario' , 
        'cedulaProfesional',
        'cedulaMoE'  
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table='usuario';
    protected $fillable = [
        'id',
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

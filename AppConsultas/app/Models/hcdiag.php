<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class hcdiag extends Model
{
    protected $table='hcdiag';
    protected $fillable = [
    'diagnostico',
    'pronostico',
    'objetivos',
    'planfisioterapeutico',
    'dermatomasmpc',
    'mapadeldolor',
    'id_f'
    ];
}

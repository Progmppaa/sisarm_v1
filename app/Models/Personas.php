<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $fillable = [
            'CI',
            'nombres',
            'apellidos',
            'Fe_nac',
            'grado',
            'dependencia',
            'destacamento',
            'compania',
            'telefono',
            'nro_carnet',
            'promo'
    ];
}          
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoDeMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        'asunto',
        'remitente',
        'destinatario',
        'armas',
        'serial',
        'cargadores',
        'cartuchos',
    ];
}

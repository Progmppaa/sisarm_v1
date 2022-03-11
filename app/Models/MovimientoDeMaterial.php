<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoDeMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'nro',
        // 'nro_doc',
        'asunto',
        'remitente',
        'destinatario',
        'armas',
        'cargadores',
        'cartuchos',
    ];
}

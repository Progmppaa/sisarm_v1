<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    protected $fillable = [
        'nombre',
        'id_destacamento',
        'descripcion'
    ];
}

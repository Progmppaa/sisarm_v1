<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municiones extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod',
        'descripcion'

    ];
}

<?php

namespace App\Http\Controllers;
use App\Models\GradoMilitar;
use Illuminate\Http\Request;

class GradoMilitarController extends Controller
{
    public function index()
    {
        $grados = GradoMilitar::all();
        return $grados;
    }
}

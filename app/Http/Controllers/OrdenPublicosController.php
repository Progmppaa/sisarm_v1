<?php

namespace App\Http\Controllers;
use App\Models\OrdenPublico;
use Illuminate\Http\Request;

class OrdenPublicosController extends Controller
{
    public function index()
    {
        $OrdenPublicos = OrdenPublico::get();
        return $OrdenPublicos;
    }
}

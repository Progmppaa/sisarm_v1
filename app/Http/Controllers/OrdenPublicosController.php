<?php

namespace App\Http\Controllers;
use App\Models\OrdenPublico;
use Illuminate\Http\Request;

class OrdenPublicosController extends Controller
{
    public function index()
    {
        $OrdenPublicos = OrdenPublico::get();
        return view('administracion/OrdenPublico', compact('OrdenPublico'));
    }

    public function formularioorden()
    {
        $OrdenPublicos = OrdenPublico::get();
        return $OrdenPublicos;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ComandoDeZona;
use App\Models\Destacamento;
use App\Models\Compania;
use App\Models\Armas;
use App\Models\Personas;
use Illuminate\Http\Request;

class Principal extends Controller
{
    function __construct()

    {
        $this->middleware('auth');    
    }
    public function index()
    {
        return view ('/principal/inicio');
    }
    public function dependencias()
    {
        $comandos = ComandoDeZona::get();
        $destacamentos = Destacamento::get();
        $companias = Compania::get();

        return view ('/administracion/dependencias', compact('comandos','destacamentos','companias'));
    }
    public function armas()
    {
        $armas = Armas::get();
        return $armas;
    }
    public function personal()
    {
        $personas = Personas::get();
        return $personas;
    }

}

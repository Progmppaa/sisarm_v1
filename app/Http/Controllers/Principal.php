<?php

namespace App\Http\Controllers;

use App\Models\ComandoDeZona;
use App\Models\Destacamento;
use App\Models\Compania;
use App\Models\Armas;
use App\Models\Personas;
use App\Models\Estados;
use App\Models\InventarioArmas;
use App\Models\Municiones;
use App\Models\OrdenPublico;
use App\Models\Optronicos;
use Illuminate\Http\Request;

class Principal extends Controller
{
    function __construct()

    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ArmasDisp = 0;
        $ArmasAsig = 0;
        $MuniDis  = 0;
        $MuniAsig = 0;
        $OrPuDis = 0;
        $OrPuAsig = 0;
        $ExploDis = 0;
        $ExploAsig = 0;
        $OptiYOptroDis = 0;
        $OptiYOptroAsig = 0;
        $ArtiAereasDis = 0;
        $ArtiAereasAsig = 0;

        $dashboard = InventarioArmas::all();
        foreach ($dashboard as $inicio) {
            if ($inicio->personas != null) {
                $ArmasAsig++;
            } else {
                $ArmasDisp++;
            }
        }
        $mncs = Municiones::all();

        foreach ($mncs as $municion) {

            if ($municion->personas != null) {

                $MuniAsig++;
            } else {

                $MuniDis++;
            }
        }
        $ordenp = OrdenPublico::all();

        foreach ($ordenp as $orden) {

            if ($orden->personas != null) {

                $OrPuAsig++;
            } else {

                $OrPuDis++;
            }
        }
        $optronicos = OrdenPublico::all();

        foreach ($optronicos as $optronico) {

            if ($optronico->personas != null) {

                $OptiYOptroAsig++;
            } else {

                $OptiYOptroDis++;
            }
        }

        return view('/principal/inicio', compact('ArmasDisp', 'ArmasAsig', 'MuniDis', 'MuniAsig', 'OrPuDis', 'OrPuAsig', 'ExploDis', 'ExploAsig', 'OptiYOptroDis', 'OptiYOptroAsig', 'ArtiAereasDis', 'ArtiAereasAsig'));
    }
    public function dependencias()
    {
        $comandos = ComandoDeZona::get();
        $destacamentos = Destacamento::get();
        $companias = Compania::get();
        $estado = Estados::get();

        return view('/administracion/dependencias', compact('comandos', 'destacamentos', 'companias', 'estado'));
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

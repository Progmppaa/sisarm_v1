<?php

namespace App\Http\Controllers;

use App\Models\MovimientoDeMaterial;
use App\Models\Personas;
use App\Models\Parametros;
use Illuminate\Http\Request;

class MovimientoDeMaterialController extends Controller
{

    public function index()
    {
        $parametros = Parametros::get();
        $materials = MovimientoDeMaterial::get();
        $personal = Personas::all();
        return view ('tramites/material', compact('materials', 'personal', 'parametros'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $cont = 0;
        $armas = [];
        foreach ($request->armas as $arma){
            $armas[] = ['armaz' => $arma, 'serial'=>$request->serials[$cont]];
            $cont++;
        }
        $a = json_encode($armas);

        $cont1= 0;
        foreach ($request->cartuchos as $cartucho) {
            $cont1 = $cont1 + $cartucho;
        }
    
        // cargador me llega por ejemplo cargadores entonces el hace recorrido y me cuenta 
        // todos los cagadores que estan llegando y a su vez lo va contando.
        $cont2= 0;
        foreach ($request->cargadores as $cargador) {
            $cont2 = $cont2 + $cargador;
        }
    
        
        $material = new MovimientoDeMaterial();
        // $material->nro = $request->nro;
        // $material->nro_doc = $request->nro_doc;
        $material->asunto = $request->asunto;
        $material->remitente = $request->remitente;
        $material->destinatario = $request->destinatario;
        $material->armas = $a;
        //aqui estamos asignando
        $material->cartuchos = $cont1;
        $material->cargadores = $cont2;
        $material->save();

        return redirect('/tramites/material_de_guerra');
    }

    public function show(MovimientoDeMaterial $movimientoDeMaterial)
    {
        //
    }

    public function edit(MovimientoDeMaterial $movimientoDeMaterial)
    {
        //
    }

    public function update(Request $request, MovimientoDeMaterial $movimientoDeMaterial)
    {
        //
    }

    public function destroy(MovimientoDeMaterial $movimientoDeMaterial)
    {
        //
    }
}

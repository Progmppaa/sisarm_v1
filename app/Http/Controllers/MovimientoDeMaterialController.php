<?php

namespace App\Http\Controllers;

use App\Models\MovimientoDeMaterial;
use Illuminate\Http\Request;

class MovimientoDeMaterialController extends Controller
{

    public function index()
    {
        $materials = MovimientoDeMaterial::get();
        return view ('tramites/material', compact('materials'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        // ---------------------------------------------------------------
        // $material = MovimientoDeMaterial::where('armas', 'serial', 'cargadores', 'cartuchos')->first();
        // $armas = json_encode($material->armas);
        // $serial = json_encode($material->serial);
        // $cargadores = json_encode($material->cargadores);
        // $cartuchos = json_encode($material->cartuchos);
        // ------------------------------------------------------------------------------------
        // $material = MovimientoDeMaterial::where('armas', 'serial', 'cargadores', 'cartuchos')->first();
        // $armas = [];
        //     $armas = json_encode($material->armas);
        //     foreach($armas as $arm){
        //         $armasActv[] = $arm;
        //     }
        // $armasActv[] = ['armas'=>$id['armas'],'serial'=>$id['serial'],'cargadores'=>['cargadores'],'cartuchos'=>['cartuchos']];

        $cont = 0;
        $armas = [];
        foreach ($request->armas as $arma){
            $armas[] = ['arma' => $arma, 'serial'=>$request->serial[$cont]];
            $cont++;
        }
        $a = json_encode($armas);

        $material = new MovimientoDeMaterial();
        $material->asunto = $request->asunto;
        $material->remitente = $request->remitente;
        $material->destinatario = $request->destinatario;
        $material->armas = $request->armas;
        $material->serial= $request->serial;
        $material->cargadores = $request->cargadores;
        $material->cartuchos = $request->cartuchos;
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

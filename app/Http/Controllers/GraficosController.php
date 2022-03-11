<?php

namespace App\Http\Controllers;
use App\Models\Graficos;
use App\Models\Estados;
use Illuminate\Http\Request;

class GraficosController extends Controller
{
    public function index()
    {
        
        return view('inventario/DetallesArmas');
    }

    public function show($id){
        $estado = Estados::where('id', $id)->first();
       
        // $estados = Estados::get();
        
        return view('inventario/DetallesArmas', compact('estado'));
    }
    
}

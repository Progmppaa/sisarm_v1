<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GraficosController;
use App\Models\Estados;
use Illuminate\Http\Request;

class GraficosController extends Controller
{
    public function index(){
        
        return view('graficos/armas');
    }
    public function DetallesArmas(){

        $estados = Estados::get();
        
        return view('inventario/DetallesArmas', compact('estados'));
    }
}

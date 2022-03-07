<?php

namespace App\Http\Controllers;
use App\Models\InventarioArmas;
use App\Models\Municiones;
use App\Models\OrdenPublico;
use App\Models\Optronicos;
use Illuminate\Http\Request;

class InicioController extends Controller


{    
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
            if ($inicio->personas !=null) {
                $ArmasAsig++;
            } else {
                $ArmasDisp++;
            }
            
        }
        $mncs = Municiones::all();
        
        foreach ($mncs as $municion) {
           
            if ($municion->modelo !=null) {
            
            $MuniAsig++;
            } else {
        
            $MuniDis++;
            }
        }
        $ordenp = OrdenPublico::all();
        
        foreach ($ordenp as $orden) {
           
            if ($orden->modelo !=null) {
            
            $OrPuAsig++;
            } else {
        
            $OrPuDis++;
            }
        }
        $optronicos = OrdenPublico::all();
        
        foreach ($optronicos as $optronico) {
           
            if ($optronico->modelo !=null) {
            
            $OptiYOptroAsig++;
            } else {
        
            $OptiYOptroDis++;
            }
        }
        return view('inicio', compact('ArmasDisp','ArmasAsig','MuniDis','MuniAsig','OrPuDis','OrPuAsig','ExploDis','ExploAsig','OptiYOptroDis','OptiYOptroAsig','ArtiAereasDis','ArtiAereasAsig'));
    }

}
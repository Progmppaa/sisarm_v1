<?php

namespace App\Http\Controllers;

use App\Models\InventarioArmas;
use App\Models\Estados;
use Illuminate\Http\Request;

class InventarioArmasController extends Controller
{

    public function index()
    {
        $armas = InventarioArmas::get();
        $estados = Estados::get();
        return view('/inventario/armas', compact('armas','estados'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(InventarioArmas $inventarioArmas)
    {
        //
    }

    public function edit(InventarioArmas $inventarioArmas)
    {
        //
    }

    public function update(Request $request, InventarioArmas $inventarioArmas)
    {
        //
    }

    public function destroy(InventarioArmas $inventarioArmas)
    {
        //
    }
    public function estadisArmas()
    {
     
    }
}

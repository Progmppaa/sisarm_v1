<?php

namespace App\Http\Controllers;
use App\Models\OrdenPublico;
use Illuminate\Http\Request;

class OrdenPublicosController extends Controller
{
    public function index()
    {
        $OrdenPublico = OrdenPublico::get();
        return view('administracion/OrdenPublico', compact('OrdenPublico'));
    }

    public function formularioorden()
    {
        $OrdenPublicos = OrdenPublico::get();
        return $OrdenPublicos;
    }

    public function store(Request $request)
    {
        request()->validate([
            'descripcion'  => 'required'
        ]);
    
        OrdenPublico::create($request->all());
    
        return redirect('administracion/OrdenPublico')->with('success', 'Su registro fue exitoso.');
    
    }
}

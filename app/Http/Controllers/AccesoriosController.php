<?php

namespace App\Http\Controllers;
use App\Models\Accesorios;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
{
    public function index()
    {
        $accesorios = Accesorios::get();
        return view('administracion/accesorios', compact('accesorios'));
        
    }
    public function store(Request $request)
    {
        request()->validate([
            'descripcion'  => 'required'
        ]);
    
        Accesorios::create($request->all());
    
        return redirect('administracion/accesorios')->with('success', 'Su registro fue exitoso.');
    
    }
    public function formulariodoc()
    {
        $accesorios = Accesorios::get();
        return $accesorios;
    }

    
    
}

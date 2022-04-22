<?php

namespace App\Http\Controllers;
use App\Models\Optronicos;
use Illuminate\Http\Request;

class OptronicosController extends Controller
{
    public function index()
    {
        $optronicos = Optronicos::get();
        return view ('/administracion/optronicos',compact('optronicos'));
    }

    public function formularioequipos()
    {
        $optronicos = Optronicos::get();
        return $optronicos;

    }
   
    public function store(Request $request)
    {
        request()->validate([
            'cod'=>'required',
            'descripcion'  => 'required'
        ]);
    
        Optronicos::create($request->all());
    
        return redirect('administracion/optronicos')->with('success', 'Su registro fue exitoso.');
    
    }
}

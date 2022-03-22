<?php

namespace App\Http\Controllers;
use App\Models\Parametros;
use Illuminate\Http\Request;

class ParametrosController extends Controller
{
    public function index()
    {
        $parametros = Parametros::get();
        return view('administracion/parametros', compact('parametros'));
    }
    public function store(Request $request)
    {
        $parametros = new Parametros();
        $parametros->cargo = $request->cargo;
        $parametros->nombres = $request->nombres;
        $parametros->apellidos = $request->apellidos;
        $parametros->CI = $request->CI;
        $parametros->grado = $request->grado;
        $parametros->nomenclatura = $request->nomenclatura;

        $parametros->save();

        return redirect('parametros');

    }
    public function edit($id)
    {
        $parametro = Parametros::find($id);
        return view('administracion/parametros_edit', compact('parametro'));
    }


    public function update(Request $request, $id)
    {
        $parametro = Parametros::find($id);
        $parametro->cargo = $request->cargo;
        $parametro->nombres = $request->nombres;
        $parametro->apellidos = $request->apellidos;
        $parametro->CI = $request->CI;
        $parametro->grado = $request->grado;
        $parametro->nomenclatura = $request->nomenclatura;

        $parametro->save();

        return redirect('parametros');
    }
    public function siglas(){
        $siglas = Parametros::get();
        return $siglas;
    }
}





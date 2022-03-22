<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');    
    }

    public function index()
    {
        $personal = Personas::all();
        return view('/administracion/personal', compact('personal'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
        request()->validate([
            'CI' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'Fe_nac' => 'required',
            'grado' => 'required',
            'dependencia' => 'required',
            'destacamento' => 'required',
            'compania' => 'required',
            'telefono' => 'required',
            'nro_carnet' => 'required',
            'promo' => 'required',

        ]);
        Personas::create($request->all());
    
        return redirect('/administracion/personal')->with('success', 'Los datos se han registrado corretamente.');
    } catch (\Throwable $th) {
        return redirect('/administracion/personal')->with('error', "Error al intentar registrar, verifique los datos e intente nuevamente.");    
    }
}


    public function show(Personas $personas)
    {
        //
    }


    public function edit($id)
    {
        $personal = Personas::find($id);
        return view('/administracion/personal_edit', compact('personal'));
    }


    public function update(Request $request, $id)
    {
        $personal = Personas::find($id);
        $personal->CI = $request->CI;
        $personal->nombres = $request->nombres;
        $personal->apellidos = $request->apellidos;
        $personal->Fe_nac = $request->Fe_nac;
        $personal->grado = $request->grado;
        $personal->dependencia = $request->dependencia;
        $personal->destacamento = $request->destacamento;
        $personal->compania = $request->compania;
        $personal->telefono = $request->telefono;
        $personal->nro_carnet = $request->nro_carnet;
        $personal->promo = $request->promo;

        $personal->save();

        return redirect('/administracion/personal');
    }

    public function destroy($id)
    {
        $personal = Personas::find($id);
        $personal->delete();
        return redirect('/administracion/personal');
    }
}

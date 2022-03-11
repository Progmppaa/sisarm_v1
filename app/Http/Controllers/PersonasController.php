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

        // $Personal = new Personas();
        // $Personal->CI = $request->CI;
        // $Personal->nombres = $request->nombres;
        // $Personal->apellidos = $request->apellidos;
        // $Personal->grado = $request->grado;
        // $Personal->dependencia = $request->dependencia;
        // $Personal->destacamento = $request->destacamento;
        // $Personal->compania = $request->compania;
        // $Personal->telefono = $request->telefono;
      
        // $Personal->save();
    
        return redirect('/administracion/personal')->with('success', 'Los datos se han registrado corretamente.');
    } catch (\Throwable $th) {
        return redirect('/administracion/personal')->with('error', "Error al intentar registrar, verifique los datos e intente nuevamente.");    
    }
}


    public function show(Personas $personas)
    {
        //
    }


    public function edit(Personas $personas)
    {
        //
    }


    public function update(Request $request, Personas $personas)
    {
        //
    }

    public function destroy($id)
    {
        $personal = Personas::find($id);
        $personal->delete();
        return redirect('/administracion/personal');
    }
}

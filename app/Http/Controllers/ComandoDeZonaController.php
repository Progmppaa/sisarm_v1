<?php

namespace App\Http\Controllers;

use App\Models\ComandoDeZona;
use Illuminate\Http\Request;

class ComandoDeZonaController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');    
    }
    public function index()
    {
        $comandos = ComandoDeZona::all();
        return $comandos;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            request()->validate([
                'nombre'  => 'required',
                'id_estado'  => 'required'
            ]);
            ComandoDeZona::create($request->all());
            return redirect('/extras/dependencias')->with('success', 'Los datos se han registrado corretamente.');
        } catch (\Throwable $th) {
            return redirect('/extras/dependencias')->with('error', "Error al intentar registrar, verifique los datos e intente nuevamente. $th");
        }
    }

    public function show(ComandoDeZona $comandoDeZona)
    {
        //
    }

    public function edit(ComandoDeZona $comandoDeZona)
    {
        //
    }

    public function update(Request $request, ComandoDeZona $comandoDeZona)
    {
        //
    }

    public function destroy(ComandoDeZona $id)
    {
        try {
            $id->delete();
            return redirect('dependencias')->with('info', 'Los datos se han eliminado corretamente.');
        } catch (\Throwable $th) {
            return redirect('dependencias')->with('error', 'Error al intentar eliminar los datos.');
        }
        
    }
}

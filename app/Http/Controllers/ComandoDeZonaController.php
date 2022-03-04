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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            request()->validate([
                'nombre'  => 'required',
                'id_estado'  => 'required'
            ]);
            ComandoDeZona::create($request->all());
            return redirect('dependencias')->with('success', 'Los datos se han registrado corretamente.');
        } catch (\Throwable $th) {
            return redirect('dependencias')->with('error', "Error al intentar registrar, verifique los datos e intente nuevamente. $th");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComandoDeZona  $comandoDeZona
     * @return \Illuminate\Http\Response
     */
    public function show(ComandoDeZona $comandoDeZona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComandoDeZona  $comandoDeZona
     * @return \Illuminate\Http\Response
     */
    public function edit(ComandoDeZona $comandoDeZona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComandoDeZona  $comandoDeZona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComandoDeZona $comandoDeZona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComandoDeZona  $comandoDeZona
     * @return \Illuminate\Http\Response
     */
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

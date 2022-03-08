<?php

namespace App\Http\Controllers;

use App\Models\Destacamento;
use Illuminate\Http\Request;

class DestacamentoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');    
    }
    public function index()
    {
        $destacamentos = Destacamento::all();
        return $destacamentos;
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
                'id_comando'  => 'required'
            ]);
            Destacamento::create($request->all());
            return redirect('/extras/dependencias')->with('success', 'Los datos se han registrado corretamente.');
        } catch (\Throwable $th) {
            return redirect('/extras/dependencias')->with('error', "Error al intentar registrar, verifique los datos e intente nuevamente.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destacamento  $destacamento
     * @return \Illuminate\Http\Response
     */
    public function show(Destacamento $destacamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destacamento  $destacamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Destacamento $destacamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destacamento  $destacamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destacamento $destacamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destacamento  $destacamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destacamento $destacamento)
    {
        //
    }
}

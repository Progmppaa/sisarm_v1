<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use Illuminate\Http\Request;

class CompaniaController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');    
    }
    public function index()
    {
        $companias = Compania::all();
        return $companias;
    }

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
                'id_destacamento'  => 'required'
            ]);
            Compania::create($request->all());
            return redirect('dependencias')->with('success', 'Los datos se han registrado corretamente.');
        } catch (\Throwable $th) {
            return redirect('dependencias')->with('error', "Error al intentar registrar, verifique los datos e intente nuevamente.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function show(Compania $compania)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function edit(Compania $compania)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compania $compania)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compania $compania)
    {
        //
    }
}

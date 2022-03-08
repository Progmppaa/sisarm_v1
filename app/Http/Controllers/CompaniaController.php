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

    public function store(Request $request)
    {
        try {
            request()->validate([
                'nombre'  => 'required',
                'id_destacamento'  => 'required'
            ]);
            Compania::create($request->all());
            return redirect('/extras/dependencias')->with('success', 'Los datos se han registrado corretamente.');
        } catch (\Throwable $th) {
            return redirect('/extras/dependencias')->with('error', "Error al intentar registrar, verifique los datos e intente nuevamente.");
        }
    }

    public function show(Compania $compania)
    {
        //
    }

    public function edit(Compania $compania)
    {
        //
    }

    public function update(Request $request, Compania $compania)
    {
        //
    }

    public function destroy(Compania $compania)
    {
        //
    }
}

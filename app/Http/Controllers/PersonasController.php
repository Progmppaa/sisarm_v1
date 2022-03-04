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
        request()->validate([
            'CI'  => 'required',
            'nombres'  => 'required',
            'apellidos'   => 'required',
            'grado' => 'required',
            'dependencia'  => 'required',
            'telefono'  => 'required',
        ]);
        Personas::create($request->all());
        return redirect('personal');
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

    public function destroy(Personas $personas)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Municiones;
use Illuminate\Http\Request;

class MunicionesController extends Controller
{
   
    public function index()
    {
        $municiones = Municiones::get();
        // return $municiones;
        return view('administracion/municiones', compact('municiones'));
        
    }
    public function formulariomuni()
    {
        $municiones = Municiones::get();
        return $municiones;
    }
    

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Municiones $municiones)
    {
        //
    }

    public function edit(Municiones $municiones)
    {
        //
    }

    public function update(Request $request, Municiones $municiones)
    {
        //
    }

    public function destroy(Municiones $municiones)
    {
        //
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Armas;
use Illuminate\Http\Request;

class ArmasController extends Controller
{
    public function index()
    {
        $armas = Armas::get();
        return view('administracion/armamentos', compact('armas'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Armas $armas)
    {
        //
    }

    public function armas()
    {
        $armas = Armas::get();
        return $armas;
    }

    public function update(Request $request, Armas $armas)
    {
        //
    }

    
    public function destroy(Armas $armas)
    {
        //
    }
}

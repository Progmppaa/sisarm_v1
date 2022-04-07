<?php

namespace App\Http\Controllers;

use App\Models\Asunto;
use Illuminate\Http\Request;

class AsuntoController extends Controller
{
    
    public function index()
    {
        $asuntos = Asunto::get();
        return $asuntos;
        
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show(Asunto $asunto)
    {
        return $asunto;
    }

    public function edit(Asunto $asunto)
    {
        //
    }

 
    public function update(Request $request, Asunto $asunto)
    {
        //
    }

    public function destroy(Asunto $asunto)
    {
        //
    }

    public function visualizar()
    {
        
    }
}

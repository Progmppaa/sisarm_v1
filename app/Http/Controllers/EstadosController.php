<?php

namespace App\Http\Controllers;

use App\Models\Estados;
use Illuminate\Http\Request;

class EstadosController extends Controller
{

    public function index()
    {
        $estados = Estados::get();
        return $estados;
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Estados $estados)
    {
        //
    }

    public function edit(Estados $estados)
    {
        //
    }

    public function update(Request $request, Estados $estados)
    {
        //
    }

    public function destroy(Estados $estados)
    {
        //
    }
}

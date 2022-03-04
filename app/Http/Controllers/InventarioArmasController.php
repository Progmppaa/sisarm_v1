<?php

namespace App\Http\Controllers;

use App\Models\InventarioArmas;
use App\Models\Estados;
use Illuminate\Http\Request;

class InventarioArmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armas = InventarioArmas::get();
        $estados = Estados::get();
        return view('inventario/armas', compact('armas','estados'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventarioArmas  $inventarioArmas
     * @return \Illuminate\Http\Response
     */
    public function show(InventarioArmas $inventarioArmas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventarioArmas  $inventarioArmas
     * @return \Illuminate\Http\Response
     */
    public function edit(InventarioArmas $inventarioArmas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventarioArmas  $inventarioArmas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventarioArmas $inventarioArmas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventarioArmas  $inventarioArmas
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventarioArmas $inventarioArmas)
    {
        //
    }
}

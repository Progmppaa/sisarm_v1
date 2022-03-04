<?php

namespace App\Http\Controllers;

use App\Models\MovimientoDeMaterial;
use Illuminate\Http\Request;

class MovimientoDeMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = MovimientoDeMaterial::get();
        return view ('tramites/material', compact('materials'));
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
     * @param  \App\Models\MovimientoDeMaterial  $movimientoDeMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(MovimientoDeMaterial $movimientoDeMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MovimientoDeMaterial  $movimientoDeMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(MovimientoDeMaterial $movimientoDeMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MovimientoDeMaterial  $movimientoDeMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MovimientoDeMaterial $movimientoDeMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MovimientoDeMaterial  $movimientoDeMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(MovimientoDeMaterial $movimientoDeMaterial)
    {
        //
    }
}

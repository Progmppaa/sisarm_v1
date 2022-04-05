<?php

namespace App\Http\Controllers;
use App\Models\Accesorios;

use Illuminate\Http\Request;

class AccesoriosController extends Controller
{
    public function index()
    {
        $accesorios = Accesorios::get();
        return view('administracion/accesorios', compact('accesorios'));
        
    }
    public function formulariodoc()
    {
        $accesorios = Accesorios::get();
        return $accesorios;
    }
    
}

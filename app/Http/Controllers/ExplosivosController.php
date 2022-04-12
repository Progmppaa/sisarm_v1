<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Explosivos;
class ExplosivosController extends Controller
{

    public function index()
    {
        $explosivos = Explosivos::get();
        return view('administracion/explosivos');
    }

    
}

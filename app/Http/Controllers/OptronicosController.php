<?php

namespace App\Http\Controllers;
use App\Models\Optronicos;
use Illuminate\Http\Request;

class OptronicosController extends Controller
{
    public function index()
    {
        $optronicos = Optronicos::get();
        return  $optronicos;
    }
}

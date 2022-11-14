<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vista;

class UsoVista extends Controller
{
    public function index(){
        $vistas = Vista::all();
        return $vistas;
    }
}

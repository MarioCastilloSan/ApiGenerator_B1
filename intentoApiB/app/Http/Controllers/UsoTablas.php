<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabla;

class UsoTablas extends Controller
{
    public function _construct(){
        $this->middleware('auth:api');
    }


    public function index(){
        $tablas = tabla::all();
        return $tablas;

        //convertir a array: .......->toArray()
        //Convertir a Json:  .......->toJson()

    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//accedemos al modelo(tabla) de task
use App\Models\task;



class FrontController extends Controller{
    public function index(){

        //-----Uso json tutorial----
        //$data = ['task'=>$task];
        //return response()->json($data, 200);

        //----Intento uso de Json-----
        //$task = task::all();
        //return  $task;

        //------Uso paginate: incluye meta informacion en Json---
        //$task = task::paginate();
        //return $task;

        //------Pasar Json----
        $task = task::all();
        return $task->toJson();



    } 
}
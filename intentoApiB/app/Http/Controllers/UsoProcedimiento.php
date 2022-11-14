<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedimiento;

class UsoProcedimiento extends Controller
{
    public function index(){
        $prodecimientos = Procedimiento::all();
        return $prodecimientos;
    }
}

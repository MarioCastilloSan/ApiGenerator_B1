<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsoTablas;
use App\Http\Controllers\UsoProcedimiento;
use App\Http\Controllers\UsoVista;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Tablas', [UsoTablas::class, 'index']);

Route::get('/Procedimientos',[UsoProcedimiento::class, 'index']);

Route::get('/Vistas',[UsoVista::class, 'index']);
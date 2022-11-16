<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsoTablas;
use App\Http\Controllers\UsoProcedimiento;
use App\Http\Controllers\UsoVista;
use App\Http\Controllers\AuthController;
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

//Uso de JWT

Route::group([
    //lo primero no es necesariop
    //'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);

    //no es necesario lo siguiente:
    //Route::post('refresh', [AuthController::class, 'refresh']);
    //Route::post('me', [AuthController::class, 'me']);

});
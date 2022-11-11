<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::apiResource('tasks', TaskController::class);

//Route::get('test', function() {
//    return "Hola mundo";
//});

//Ruta que devuelve formato Json la Base de datos
Route::get('/Json', [\App\Http\Controllers\FrontController::class, 'index']);

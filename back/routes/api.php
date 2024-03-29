<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::resource('rubro',\App\Http\Controllers\RubroController::class);
Route::resource('punto',\App\Http\Controllers\PuntoController::class);
Route::resource('aviso',\App\Http\Controllers\AvisoController::class);
Route::resource('conjunto',\App\Http\Controllers\ConjuntoController::class);
//actulizarconjunto
Route::put('actualizarconjunto/{id}',[\App\Http\Controllers\ConjuntoController::class,'actualizarconjunto']);

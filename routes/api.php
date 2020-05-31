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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('Persona')->group(function(){
    Route::get('tipo/{nombre}/add', 'Api\TipoPersonaController@add');

});

Route::prefix('Ayuda')->group(function(){
    Route::get('tipo/{nombre}/add', 'Api\TipoAyudaController@add');

});

Route::prefix('Propuesta')->group(function(){
    Route::get('tipo/{nombre}/add', 'Api\TipoPropuestaController@add');

});
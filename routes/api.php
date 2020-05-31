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
    Route::get('add', 'Api\PersonaController@add');
    Route::get('tipo/{nombre}/add', 'Api\TipoPersonaController@add');
    Route::get('tipo/all', 'Api\TipoPersonaController@all');
});

Route::prefix('Ayuda')->group(function(){
    Route::get('tipo/{nombre}/add', 'Api\TipoAyudaController@add');
    Route::get('tipo/all', 'Api\TipoAyudaController@all');
});

Route::prefix('Propuesta')->group(function(){
    Route::get('tipo/{nombre}/add', 'Api\TipoPropuestaController@add');
    Route::get('tipo/all', 'Api\TipoPropuestaController@all');
});

Route::prefix('Usuario')->group(function(){
    Route::post('add', 'Api\UsuarioController@add');
    Route::post('login', 'Api\UsuarioController@all');
});

Route::prefix('Campesino')->group(function(){
    Route::post('solicitud/add', 'Api\SolicitudCampesinoController@add');
});

Route::prefix('Entidad')->group(function(){
    Route::post('solicitud/add', 'Api\SolicitudEntidaController@add');
    Route::post('add', 'Api\EntidadController@add');
});

Route::prefix('Provincia')->group(function(){
    Route::get('tipo/{nombre}/add', 'Api\ProvinciaController@add');
    Route::get('tipo/all', 'Api\ProvinciaController@all');
});

Route::prefix('Evento')->group(function(){
    Route::post('add', 'Api\EventoController@add');
});
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
    Route::post('add', 'Api\PersonaController@add');
    Route::get('tipo/{nombre}/add', 'Api\TipoPersonaController@add');
    Route::get('tipo/all', 'Api\TipoPersonaController@all');
    Route::get('tipo/{id}', 'Api\PersonaController@tipo');
    Route::get('find/{id}', 'Api\PersonaController@find');
});

Route::prefix('Ayuda')->group(function(){
    Route::get('tipo/{nombre}/add', 'Api\TipoAyudaController@add');
    Route::get('tipo/all', 'Api\TipoAyudaController@all');
});

Route::prefix('Estado')->group(function(){
    Route::get('{nombre}/add', 'Api\EstadoController@add');
    Route::get('all', 'Api\EstadoController@all');
});

Route::prefix('Propuesta')->group(function(){
    Route::get('tipo/{nombre}/add', 'Api\TipoPropuestaController@add');
    Route::get('tipo/all', 'Api\TipoPropuestaController@all');
});

Route::prefix('Usuario')->group(function(){
    Route::post('add', 'Api\UsuarioController@add');
    Route::post('login', 'Api\UsuarioController@login');
});

Route::prefix('Campesino')->group(function(){
    Route::post('solicitud/add', 'Api\SolicitudCampesinoController@add');
    Route::get('solicitud/estado/{id}', 'Api\SolicitudCampesinoController@estado');
    Route::get('solicitud/{id}', 'Api\SolicitudCampesinoController@solicitud');
    Route::get('solicitudes', 'Api\SolicitudCampesinoController@solicitudes');
    Route::post('solicitud/update', 'Api\SolicitudCampesinoController@update');
});

Route::prefix('Entidad')->group(function(){
    Route::post('update', 'Api\SolicitudEntidaController@update');
    Route::get('find/{id}', 'Api\EntidadController@find');
    Route::get('all', 'Api\EntidadController@find');
    Route::post('solicitud/add', 'Api\SolicitudEntidaController@add');
    Route::post('add', 'Api\EntidadController@add');
    Route::get('estado/{id}', 'Api\EntidadController@estado');
    Route::get('solicitud/estado/{id}', 'Api\EntidadController@estado');
    Route::get('solicitud/{id}', 'Api\SolicitudEntidaController@solicitud');
    Route::get('solicitudes', 'Api\SolicitudEntidaController@solicitudes');
    Route::post('solicitud/update', 'Api\SolicitudEntidaController@update');
});

Route::prefix('Provincia')->group(function(){
    Route::get('{nombre}/add', 'Api\ProvinciaController@add');
    Route::get('all', 'Api\ProvinciaController@all');
});

Route::prefix('Evento')->group(function(){
    Route::post('add', 'Api\EventoController@add');
});
<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Evento;

class EventoController extends Controller
{
    //
    public function add(Request $request){
        try
        {
            $evento = new Evento();
            $evento->nombre = $request->nombre;
            $evento->descripcion = $request->descripcion;
            $evento->direccion = $request->direccion;
            $evento->imagen = $request->imagen;
            $evento->link = $request->link;
            $evento->fechaFin = $request->fechaFin;
            $evento->fechaIni = $request->fechaIni;
            $evento->idEstado = $request->idEstado;
            $evento->idProvincia = $request->idProvincia;
            $evento->idEntidad = $request->idEntidad;
            $evento->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Evento Creado',
                'body'=> $evento],
                200);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false,
                'message'=> 'Hubo un error',
                'body' => $e->getMessage()],
                500);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\SolicitudEntidad;

class SolicitudEntidaController extends Controller
{
    //
    public function add(Request $request){
        try
        {
            $solicitud = new SolicitudEntidad();
            $solicitud->detalle = $request->detalle;
            $solicitud->comentario = $request->comentario;
            $solicitud->fecha = $request->fecha;
            $solicitud->idEstado = $request->idEstado;
            $solicitud->idTipo = $request->idTipo;
            $solicitud->idEntidad = $request->idEntidad;
            $solicitud->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Solicitud Creada',
                'body'=> $solicitud],
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

    public function estado($id){
        try
        {
            $solicitudes = SolicitudEntidad::where('idEstado',$id)->get();
            
            return response()->json(['status' => true, 
                'message'=> 'Solicitudes Encontradas',
                'body'=> $solicitudes],
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

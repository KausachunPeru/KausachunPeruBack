<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\SolicitudCampesino;

class SolicitudCampesinoController extends Controller
{
    //
    public function add(Request $request){
        try
        {
            $solicitud = new SolicitudCampesino();
            $solicitud->detalle = $request->detalle;
            $solicitud->comentario = $request->comentario;
            $solicitud->fecha = $request->fecha;
            $solicitud->idEstado = $request->idEstado;
            $solicitud->idTipo = $request->idTipo;
            $solicitud->idPersona = $request->idPersona;
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

    public function update(Request $request){
        try
        {
            $solicitud = SolicitudCampesino::where('id',$id)->first();
            $solicitud->detalle = $request->detalle;
            $solicitud->comentario = $request->comentario;
            $solicitud->fecha = $request->fecha;
            $solicitud->idEstado = $request->idEstado;
            $solicitud->idTipo = $request->idTipo;
            $solicitud->idPersona = $request->idPersona;
            $solicitud->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Solicitud Actualizada',
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
            $solicitudes = SolicitudCampesino::where('idEstado',$id)->get();
            
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

    public function solicitudes(){
        try
        {
            $solicitudes = SolicitudCampesino::with(['estado','tipo','persona'])->get();
            
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

    public function solicitud($id){
        try
        {
            $solicitudes = SolicitudCampesino::where('id',$id)->with(['estado','tipo','persona'])->first();
            
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

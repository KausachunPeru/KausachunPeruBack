<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Entidad;

class EntidadController extends Controller
{
    //
    public function add(Request $request){
        try
        {
            $entidad = new Entidad();
            $entidad->nombre = $request->nombre;
            $entidad->descripcion = $request->descripcion;
            $entidad->telefono = $request->telefono;
            $entidad->correo = $request->correo;
            $entidad->paginaWeb = $request->paginaWeb;
            $entidad->logo = $request->logo;
            $entidad->fecha = $request->fecha;
            $entidad->idEstado = $request->idEstado;
            $entidad->idContacto = $request->idContacto;
            $entidad->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Entidad Creada',
                'body'=> $entidad],
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

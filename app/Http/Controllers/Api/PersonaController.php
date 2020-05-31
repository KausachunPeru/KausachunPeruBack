<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Persona;

class PersonaController extends Controller
{
    //
    public function add(Request $request){
        try
        {
            return $request;
            $persona = new Persona();
            $persona->nombres = $request->nombres;
            $persona->apellidos = $request->apellidos;
            $persona->dni = $request->dni;
            $persona->telefono = $request->telefono;
            $persona->correo = $request->correo;
            $persona->cargo = $request->cargo;
            $persona->idTipo = $request->idTipo;
            $persona->idProvincia = $request->idProvincia;
            $persona->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Solicitud Creada',
                'body'=> $persona],
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

    public function tipo($id){
        try
        {
            $personas = Persona::where('idTipo',$id)->get();
            
            return response()->json(['status' => true, 
                'message'=> 'Personas encontradas',
                'body'=> $personas],
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

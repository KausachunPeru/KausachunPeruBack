<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\TipoPersona;

class TipoPersonaController extends Controller
{
    //
    public function add($nombre){
        try
        {
            $type = new TipoPersona();
            $type->nombre = $nombre;
            $type->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Tipo Persona Creado',
                'body'=> $type],
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

    public function all(){
        try
        {
            $all = TipoPersona::all();

            return response()->json(['status' => true, 
                'message'=> 'Tipos Encontrados',
                'body'=> $all],
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

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Estado;

class EstadoController extends Controller
{
    //
    public function add($nombre){
        try
        {
            $estado = new Estado();
            $estado->nombre = $nombre;
            $estado->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Estado Creado',
                'body'=> $estado],
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
            $all = Estado::all();

            return response()->json(['status' => true, 
                'message'=> 'Estados Encontrados',
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

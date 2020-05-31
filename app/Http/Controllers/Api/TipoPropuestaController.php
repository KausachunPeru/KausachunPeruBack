<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\TipoPropuesta;

class TipoPropuestaController extends Controller
{
    //
    public function add($nombre){
        try
        {
            $type = new TipoPropuesta();
            $type->nombre = $nombre;
            $type->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Tipo Propuesta Creado',
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
}

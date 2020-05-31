<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\TipoAyuda;

class TipoAyudaController extends Controller
{
    //
    public function add($nombre){
        try
        {
            $type = new TipoAyuda();
            $type->nombre = $nombre;
            $type->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Tipo Ayuda Creado',
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

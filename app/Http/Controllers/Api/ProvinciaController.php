<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Provincia;

class ProvinciaController extends Controller
{
    //
    public function add($nombre){
        try
        {
            $provincia = new Provincia();
            $provincia->nombre = $nombre;
            $provincia->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Provincia Creada',
                'body'=> $provincia],
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
            $all = Provincia::all();

            return response()->json(['status' => true, 
                'message'=> 'Provincias Encontradas',
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

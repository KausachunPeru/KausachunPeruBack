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

    public function update(Request $request){
        try
        {
            $entidad = Entidad::where('id',$request->id)->first();
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
                'message'=> 'Entidad Actualizada',
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

    public function estado($id){
        try
        {
            $entidades = Entidad::where('idEstado',$id)->get();
            
            return response()->json(['status' => true, 
                'message'=> 'Entidades Encontradas',
                'body'=> $entidades],
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
            $all = Entidad::all();

            return response()->json(['status' => true, 
                'message'=> 'Entidades Encontradas',
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

    public function find($id){
        try
        {
            $entidad = Entidad::where('id',$id)->find();
            return response()->json(['status' => true, 
                'message'=> 'Entidad Encontrada',
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

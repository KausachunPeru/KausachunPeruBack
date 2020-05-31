<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Usuario;

class UsuarioController extends Controller
{
    //
    public function add(Request $request){
        try
        {
            $user = new Usuario();
            $user->name = $request->name;
            $user->password = $request->password;
            $user->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Usuario Creado',
                'body'=> $user],
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

    public function login(Request $request){
        try
        {
            $user = Usuario::where('name',$request->name)->where('password',$request->password)->first();
            if($user)
            {
                return response()->json(['status' => true, 
                    'message'=> 'Login Success',
                    'body'=> $user],
                    200);
            }
            else {
                return response()->json(['status' => false, 
                    'message'=> 'Login Fail',
                    'body'=> $user],
                    200);
            }
            
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

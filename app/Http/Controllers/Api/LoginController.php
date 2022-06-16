<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //metodos
    public function login(Request $request){
        //invoco  un metodo que he creado
        $this->validateLogin($request);

        //login exitoso
        if(Auth::attempt($request->only('email','password'))){
            return response()->json([
                'token'=> $request->user()->createToken($request->name)->plainTextToken,
                'message'=>'Success'
            ]);
        }
        //login falso
        return response()->json([
            'message'=>'Usuario no autorizado'
        ],401);
    }

    public function validateLogin(Request $request){
       return $request->validate([
            'email'=> 'required|email',
            'password'=>'required',
            'name'=> 'required', //campo para saber el dispositivo

       ]);
    }
}

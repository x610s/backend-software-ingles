<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(Request $request)
    {
      $user = User::Where('email','=',$request->email)->first();
      if($user && $user != null){
            if(Hash::check($request->password,$user->password)){
            return response()->json($user, 200);
            }else{
              return response()->json("Credenciales Incorrectas", 400);
            }
      }else{
        return response()->json("No encontrado", 400);
      }

    }

}

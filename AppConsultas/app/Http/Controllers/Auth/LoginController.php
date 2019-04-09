<?php

namespace App\Http\Controllers\Auth;
use Auth;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class LoginController extends Controller
{

  public function login(Request $request){
    $credentials = $this->validate(request(), [
      'curp' => 'required|string',
      'password' => 'required|string'
    ]);

    $users = DB::table('usuario')->where('curp', ''.$request->curp)->get();
    $tipo_u = "";
    foreach ($users as $user)
    {
        $tipo_u = $user->tipoDeUsuario;
    }
//$request->curp;

    if(Auth::attempt($credentials)){
      return $tipo_u;
    }
    return back()
    ->withErrors(['btn_s' => 'CURP o contraseña inválidos'])
    ->withInput(request(['curp']));
  }


}

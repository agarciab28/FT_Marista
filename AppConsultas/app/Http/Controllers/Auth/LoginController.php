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
      'nombreDeUsuario' => 'required|string',
      'password' => 'required|string'
    ]);

    $users = DB::table('usuario')->where('nombreDeUsuario', ''.$request->nombreDeUsuario)->get();
    $tipo_u = "";
    foreach ($users as $user)
    {
        $tipo_u = $user->tipoDeUsuario;
    }
//$request->curp;

    if(Auth::attempt($credentials)){
      if ($tipo_u == "rectoria") {
        return view('admin.home');
      }elseif ($tipo_u == "coordinador") {
        return view('admin.home');
      }elseif ($tipo_u == "administrador") {
        return view('admin.home');
      } elseif ($tipo_u == "medico") {
        return view('medico.home');
      } elseif ($tipo_u == "pasante") {
        return view('medico.home');
      }elseif ($tipo_u == "fisioterapeuta") {
        return view('medico.home');
      } elseif ($tipo_u == "practicante") {
        return view('practicante.home');
      }
    }
    return back()
    ->withErrors(['btn_s' => 'Nombre de usuario o contraseña inválidos'])
    ->withInput(request(['nombreDeUsuario']));
  }


}

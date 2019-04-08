<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
  public function login(){
    $credentials = $this->validate(request(), [
      'curp' => 'required|string',
      'password' => 'required|string'
    ]);

    if(Auth::attempt($credentials)){
      return view('dashboard');
    }
    return back()
    ->withErrors(['btn_s' => 'CURP o contraseña inválidos'])
    ->withInput(request(['curp']));
  }


}

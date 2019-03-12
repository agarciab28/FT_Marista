@extends('layouts.login')

@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
  {{-- Aqui va todo dentro del body --}}
  <div class="background">
    <div class="bg-color">
      <div class="section">
        <div class="row">
          <div class="col s6 push-s3 m4 push-m4">
            <img src="{{{ asset('img/logos/logo_1_b.png') }}}" alt="" class="responsive-img">
          </div>
        </div>
        <div class="row">
          <div class="col s12 m8 push-m2">
            <div class="card-panel">
              <div class="card-content">
                <p class="black-text">Bienvenido al sistema de control de consultas para la facultad de fisioterapia de la Universidad Marista</p>
              </div>
              <div class="row">
                <form class="col s12" action="" method="post">
                  <div class="row">
                    <div class="input-field col s10 push-s1 pull-s1">
                      <input type="text" class="validate" id="username">
                      <label for="username"><i class="fas fa-user" style="margin-right:0.5em;"></i>Nombre de Usuario</label>
                    </div>
                    <div class="input-field col s10 push-s1 pull-s1">
                      <input type="password" class="validate" id="password">
                      <label for="password"><i class="fas fa-lock" style="margin-right:0.5em;"></i>Contraseña</label>
                    </div>
                    <button class="col s4 push-s4 pull-s4 btn waves-effect waves-light" type="submit" name="action">Acceder</button>
                  </div>
                  <div class="row">
                    <div class="link col s8 push-s2">
                      <a href="">¿Olvidaste tu contraseña?</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <p>Todos los derechos reservados © 2019</p>
      </div>
    </div>
  </div>
@endsection

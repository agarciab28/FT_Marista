@extends('layouts.app_login')

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
                <p class="black-text">Centro Universitario de Fisioterapia, Rehabilitación e Investigación (C.U.F.R.I.) "Hno. Gabriel Allec"</p>
              </div>
              <div class="row">
                <form class="col s12" action="{{ route('login') }}" method="POST">
{{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col s10 push-s1 pull-s1">
                      <input type="text"  id="nombreDeUsuario" name="nombreDeUsuario" class="validate " value="{{ old('nombreDeUsuario') }}">
                      <label for="nombreDeUsuario"><i class="fas fa-user" style="margin-right:0.5em;"></i>Nombre de Usuario</label>
                      {!! $errors->first('nombreDeUsuario', '<span id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}
                    </div>
                    <div class="input-field col s10 push-s1 pull-s1">
                      <input type="password" id="password" name="password" class="validate " >
                      <label for="password"><i class="fas fa-lock" style="margin-right:0.5em;"></i>Contraseña</label>
                      {!! $errors->first('password', '<span id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}
                    </div>
                    <button id="btn_s" name="btn_s" class="col s4 push-s4 pull-s4 btn waves-effect waves-light" type="submit" name="action">Acceder</button>
                  </div>
                  <div class="input-field col s10 push-s1 pull-s1">
                    {!! $errors->first('btn_s', '<span  id="error_msj2" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

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

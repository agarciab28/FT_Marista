@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/registrar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Registrar Usuario')

@section('content')
  <div class="section container">
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form role="form" action="{{ route('reguser.store') }}" method="POST">
    {{ csrf_field() }}
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12 m4">
              <select name="tipoDeUsuario">
                <option value="" disabled selected>Elige una opción</option>
                <option value="rectoria">Rectoría</option>
                <option value="coordinador">Coordinador</option>
                <option value="medico">Médico</option>
                <option value="pasante">Pasante</option>
                <option value="fisioterapeuta">Fisioterapeuta</option>
              </select>
              <label>Tipo de Usuario</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="nombre" name="nombre" type="text" class="validate">
              <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="apellido_p" type="text" name="apellidoP" class="validate">
              <label for="apellido_p">Apellido Paterno</label>
            </div>

            <div class="input-field col s12 m4">
              <input id="apellido_m" type="text" name="apellidoM" class="validate">
              <label for="apellido_m">Apellido Materno</label>
            </div>

            <div class="input-field col s12 m4">
              <input id="email" type="email" name="correoElectronico" class="validate">
              <label for="email">Correo Electrónico</label>
            </div>

            <div class="input-field col s12 m4">
              <input id="nombreDeUsuario" type="text" name="nombreDeUsuario" class="validate">
              <label for="nombreDeUsuario">Usuario</label>
            </div>

            <div class="input-field col s12 m4">
              <input id="password" type="password" name="password" >
              <label for="password">Contraseña</label>
            </div>

            <div class="input-field col s12 m8">
              <input id="cedula_p" type="text" name="cedulaProfesional">
              <label for="cedula_p">Cédula Profesional</label>
            </div>

            <div class="input-field col s12 m8">
              <input id="cedula_m" type="text" name="cedulaMoE">
              <label for="cedula_m">Cédula de Especialiad o Maestría</label>
            </div>



            <div class="input-field col s12 m4">
              <input id="telefono" type="tel" name="telefono">
              <label for="telefono">Número de Teléfono</label>
            </div>

            <div class="input-field col s12 m4">
              <input id="curp" type="text" name="curp">
              <label for="curp">CURP</label>
            </div>

            <button class="col s4 push-s4 pull-s4 btn waves-effect waves-light" type="submit" name="action">Registrar</button>

          </div>
        </div>
      </div>
    </form>
  </div>

@endsection

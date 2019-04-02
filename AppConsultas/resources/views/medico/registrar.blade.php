@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/medico/registrar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Registrar Paciente')

@section('content')
  <div class="section container">
    <div class="row">
      <div class="contenedor col s12 m6 push-m3">
        <h4>Historia Clínica</h4>
      </div>
    </div>
    <form class="form_1" action="" method="">
      <div class="row">
        <div class="input-field col s12 m4">
          <input id="nombre" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="apellido" type="text" class="validate">
          <label for="apellido">Apellido</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="edad" type="number" class="validate">
          <label for="edad">Edad</label>
        </div>
        <div class="input-field col s12 m4">
          <select>
            <option value="" disabled selected>Elige una opcion</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
          </select>
          <label>Genero</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="nacionalidad" type="text" class="validate">
          <label for="nacionalidad">Nacionalidad</label>
        </div>
        <div class="input-field col s12 m4">
          <select>
            <option value="" disabled selected>Elige una opcion</option>
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
          </select>
          <label>Estado Civil</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="ocupacion" type="text" class="validate">
          <label for="ocupacion">Ocupación</label>
        </div>
        <div class="input-field col s12 m8">
          <input id="calle" type="text" class="validate">
          <label for="calle">Calle</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="numero" type="text" class="validate">
          <label for="numero">Numero</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="colonia" type="text" class="validate">
          <label for="colonia">Colonia</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="tel1" type="text" class="validate">
          <label for="tel1">Telefono</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="celular" type="tel" class="validate">
          <label for="celular">Celular</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="religion" type="tel" class="validate">
          <label for="religion">Religion</label>
        </div>
        <div class="input-field col s12 m8">
          <input id="nombre2" type="text" class="validate">
          <label for="nombre2">Persona en caso de emergencia</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="tel2" type="tel" class="validate">
          <label for="tel2">Telefono/Celular</label>
        </div>
        <button class="col s4 m2 btn waves-effect waves-light" type="" name="action">Anterior</button>
        <button class="col s4 m2 push-s4 push-m8 btn waves-effect waves-light" type="" name="action">Siguiente</button>
      </div>

    </form>
  </div>
@endsection

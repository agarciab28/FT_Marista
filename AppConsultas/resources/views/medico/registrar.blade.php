@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/medico/registrar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Registrar Paciente')

@section('content')
  <div class="fixed-action-btn" onclick="backTop()">
    <a class="btn-floating btn-large">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>

    <div class="row">
      <div class="contenedor col s12 m8 push-m2">
        <h2>Historia Clínica</h4>
      </div>
    </div>

    {{-- <div class="section container">
      <ul class="collapsible">
        <li>
          <div class="collapsible-header"><i class="material-icons">menu</i>Menú</div>
          <div class="collapsible-body">
            <div class="row botones">
              <button type="submit" class="btn class s4 menu" name="button">Ficha de Identificación</button>
              <button type="submit" class="btn class s4 menu" name="button" disabled>Antecedentes Heredo Familiares</button>
              <button type="submit" class="btn class s4 menu" name="button" disabled>Antecedentes Personales no Patológicos</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Antescedentes Personales Patológicos</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Antecedentes Gineco Obstetricos</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Padecimiento Actual</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Sintomas Generales</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Aparatos y Sistemas</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Diagnósticos Anteriores</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Exploración Física</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Exploración General</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Exploración por Región</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Sistema Musculo Esqueletico</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Diagnóstico Fisioterapéutico</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Dermatomas</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Mapa de Dolor</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Arcos de Movimiento</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Par/Nervio</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Escala de Ashworth</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Reflejos Osteotendinosos</button>
              <button type="button" class="btn class s4 menu" name="button" disabled>Tipos de Marcha</button>
            </div>
          </div>
        </li>
      </ul>
    </div> --}}

    {{-- <div class="section container">
      <ul class="collapsible">
        <li>
          <div class="collapsible-header"><i class="material-icons">menu</i>Menú</div>
          <div class="collapsible-body">
            <ul>
              <li id="home" style="background-color:blue;"><a class="black-text" href="/medico"><i class="fas fa-home black-text" style="margin-right:0;"></i>Ficha de Identificacion</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div> --}}



    <div class="section container">

      {{-- Ficha de identificacion --}}
    <form class="" id="ficha_id" action="{{ route('store_ficha_id') }}" method="POST">
        {{ csrf_field() }}

        @if(session('success'))
            <script type="text/javascript">
              alert(
                '{{session('success')}}'
              );
            </script>
        @endif
      <div class="row">
        <h5 style="font-weight:bold;">Ficha de Identificacion</h5>
        <div class="input-field col s12 m4">
          <input id="nombre" name="nombre" type="text" class="validate" required>
          <label for="nombre">Nombre</label>
          {!! $errors->first('nombre', '<span id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}
        </div>
        <div class="input-field col s12 m4">
          <input id="apellido_p" name="apellido_p" type="text" class="validate"  required>
          <label for="apellido_p">Apellido Paterno</label>
          {!! $errors->first('apellidoP', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m4">
          <input id="apellido_m" type="text" class="validate" name="apellido_m"  required>
          <label for="apellido_m">Apellido Materno</label>
          {!! $errors->first('apellido_m', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m3">
          <input id="edad" name="edad" type="number" class="validate" required>
          <label for="edad">Edad</label>
          {!! $errors->first('edad', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}
        </div>

        <div class="input-field col s12 m3">
          <select name="sex" id="sex" required>
            <option value="" disabled selected>Elige una opcion</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
          <label>Genero</label>
          {!! $errors->first('sex', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>

        <div class="input-field col s12 m3">
          <input id="nacionalidad" name="nacionalidad" type="text" class="validate" required>
          <label for="nacionalidad">Nacionalidad</label>
          {!! $errors->first('nacionalidad', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m3">
          <select name="est_civ" id="est_civ" required>
            <option value="" disabled selected>Elige una opcion</option>
            <option value="S">Soltero</option>
            <option value="C">Casado</option>
          </select>
          <label>Estado Civil</label>
          {!! $errors->first('est_civ', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m3">
          <input id="ocupacion" name="ocupacion" type="text" class="validate" required>
          <label for="ocupacion">Ocupación</label>
          {!! $errors->first('ocupacion', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m3">
          <input id="calle" type="text" name="calle" class="validate" required>
          <label for="calle">Calle</label>
          {!! $errors->first('calle', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m3">
          <input id="numero_int" type="text" class="validate" name="numero_int" required>
          <label for="numero_int">Numero interior</label>
          {!! $errors->first('numero_int', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m3">
          <input id="numero_ext" type="text" class="validate" name="numero_ext" required>
          <label for="numero_ext">Numero exterior</label>
          {!! $errors->first('numero_ext', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>

        <div class="input-field col s12 m4">
          <input id="colonia" type="text" class="validate" name="colonia" required>
          <label for="colonia">Colonia</label>
          {!! $errors->first('colonia', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m4">
          <input id="ciudad" type="text" class="validate" name="ciudad" required>
          <label for="ciudad">Ciudad</label>
          {!! $errors->first('ciudad', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>

        <div class="input-field col s12 m4">
          <input id="estado" type="text" class="validate" name="estado" required>
          <label for="estado">Estado</label>
          {!! $errors->first('estado', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m4">
          <input id="tel1" type="tel" class="validate" name="tel1" required>
          <label for="tel1">Telefono</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="celular" type="tel" name="celular" class="validate" required>
          <label for="celular">Celular</label>
          {!! $errors->first('celular', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m4">
          <input id="religion" type="tel" name="religion" class="validate" required>
          <label for="religion">Religion</label>
          {!! $errors->first('religion', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12 m4">
          <input id="curp" type="text" name="curp" class="validate" required>
          <label for="curp">CURP</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="nombre2" type="text" name="nombre2" class="validate" required>
          <label for="nombre2">Persona en caso de emergencia</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="tel2" type="tel" name="tel2" class="validate" required>
          <label for="tel2">Telefono/Celular</label>
          {!! $errors->first('tel2', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="input-field col s12">
          <input id="motivo" type="text" name="motivo" class="validate" required>
          <label for="motivo">Motivo de la consulta</label>
          {!! $errors->first('motivo', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

        </div>
        <div class="row">

        </div>
        <button type="submit" onclick="habilitarBotones()" class="btn col s12 m4 push-m4" name="button">Guardar</button>
      </div>

    </form>

      {{-- Antescedentes heredo familiares --}}
      {{-- <form class="" id="antescedentes_hf" action="index.html" method="post">
        <div class="row">
          <h6 style="font-weight:bold;">Antescedentes Familiares</h6>
          <div class="col s12 m6">
            <div class="card">
              <span class="card-title">Enfermedades Reumatologicas</span>
              <div class="card-content">
                <div class="contenedor">
                  <label>
                    <input class="with-gap" name="enf_reu" type="radio"/>
                    <span>Sí</span>
                  </label>

                  <label>
                    <input class="with-gap" name="enf_reu" type="radio"/>
                    <span>No</span>
                  </label>
                </div>
                <div class="contendedor">
                  <label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0px;" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0px;" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0px;" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0px;" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" style="vertical-align: middle; margin: 0px;" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </div>
                <div class="contenedor">
                  <div class="input-field col s12">
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">¿Cual Padecimiento?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <form class="" id="antescedentes_hf" action="index.html" method="post">
        <div class="row">
          <h5 style="font-weight:bold;">Antecedentes Familiares</h5>
          <table class="responsive-table striped">
            <thead>
              <tr>
                <th>Padecimiento</th>
                <th>Si o No</th>
                <th>¿Quien?</th>
                <th>¿Cual Padecimiento?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Enfermedades reumatologicas</td>
                <td>
                  <label>
                    <input class="with-gap" name="enf_reu" type="radio"/>
                    <span>Sí</span>
                  </label>

                  <label>
                    <input class="with-gap" name="enf_reu" type="radio"/>
                    <span>No</span>
                  </label>
                </td>

                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Enfermedades del sistema nervioso</td>
                <td>
                  <label>
                    <input class="with-gap" name="enf_sn" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="enf_sn" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_enf_sisnerv" class="materialize-textarea"></textarea>
                    <label for="ta_enf_sisnerv">Escribe aquí</label>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Sindromes</td>
                <td>
                  <label>
                    <input class="with-gap" name="sin" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sin" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sindromes" class="materialize-textarea"></textarea>
                    <label for="ta_sindromes">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Malformaciones</td>
                <td>
                  <label>
                    <input class="with-gap" name="mal" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="mal" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_malfor" class="materialize-textarea"></textarea>
                    <label for="ta_malfor">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Congenitas</td>
                <td>
                  <label>
                    <input class="with-gap" name="con" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="con" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_congenitas" class="materialize-textarea"></textarea>
                    <label for="ta_congenitas">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Diabetes</td>
                <td>
                  <label>
                    <input class="with-gap" name="dia" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="dia" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_diabetes" class="materialize-textarea"></textarea>
                    <label for="ta_diabetes">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Hipertension Arterial Sistemica</td>
                <td>
                  <label>
                    <input class="with-gap" name="has" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="has" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_hiper_art" class="materialize-textarea"></textarea>
                    <label for="ta_hiper_art">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Cancer</td>
                <td>
                  <label>
                    <input class="with-gap" name="can" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="can" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_cancer" class="materialize-textarea"></textarea>
                    <label for="ta_cancer">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Cardiopatias</td>
                <td>
                  <label>
                    <input class="with-gap" name="cardio" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="cardio" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_cardio" class="materialize-textarea"></textarea>
                    <label for="ta_cardio">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Vasculares</td>
                <td>
                  <label>
                    <input class="with-gap" name="vascu" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="vascu" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_vascu" class="materialize-textarea"></textarea>
                    <label for="ta_vascu">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Pulmonares</td>
                <td>
                  <label>
                    <input class="with-gap" name="pulmon" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="pulmon" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_pulmon" class="materialize-textarea"></textarea>
                    <label for="ta_pulmon">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Heptopatías</td>
                <td>
                  <label>
                    <input class="with-gap" name="hepto" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="hepto" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_hepto" class="materialize-textarea"></textarea>
                    <label for="ta_hepto">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nefropatías</td>
                <td>
                  <label>
                    <input class="with-gap" name="nefro" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="nefro" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_nefro" class="materialize-textarea"></textarea>
                    <label for="ta_nefro">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Digestivos</td>
                <td>
                  <label>
                    <input class="with-gap" name="diges" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="diges" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_diges" class="materialize-textarea"></textarea>
                    <label for="ta_diges">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Endocrinopatías</td>
                <td>
                  <label>
                    <input class="with-gap" name="endo" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="endo" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_endo" class="materialize-textarea"></textarea>
                    <label for="ta_endo">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Transtornos Hematológicos</td>
                <td>
                  <label>
                    <input class="with-gap" name="hemato" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="hemato" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_trans_hemato" class="materialize-textarea"></textarea>
                    <label for="ta_trans_hemato">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Dislipidemias</td>
                <td>
                  <label>
                    <input class="with-gap" name="disli" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="disli" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_disli" class="materialize-textarea"></textarea>
                    <label for="ta_disli">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Otros</td>
                <td>
                  <label>
                    <input class="with-gap" name="otro" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="otro" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_otros" class="materialize-textarea"></textarea>
                    <label for="ta_otros">Escribe aquí</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
        </div>
      </form>











      {{-- Antescedentes Personales no patologicos --}}
      <form class="" id="antescedentes_pnp" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Antecedentes Personales no Patologicos</h5>
          <table class="responsive-table striped">
            <thead>
              <tr>
                <th>Problema</th>
                <th>Si o No</th>
                <th>¿Cuál?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tipo de construcción no favorable</td>
                <td>
                  <label>
                    <input class="with-gap" name="tcf" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="tcf" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_construc" class="materialize-textarea"></textarea>
                    <label for="ta_construc">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Suelo no regular</td>
                <td>
                  <label>
                    <input class="with-gap" name="snr" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="snr" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_suelo" class="materialize-textarea"></textarea>
                    <label for="ta_suelo">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Escaleras que dificultan actividades <br> de la vida diaria</td>
                <td>
                  <label>
                    <input class="with-gap" name="escal" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="escal" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_escaleras" class="materialize-textarea"></textarea>
                    <label for="ta_escaleras">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Ventilación inadecuada</td>
                <td>
                  <label>
                    <input class="with-gap" name="ventil" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ventil" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_vent" class="materialize-textarea"></textarea>
                    <label for="ta_vent">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Hacinamiento</td>
                <td>
                  <label>
                    <input class="with-gap" name="hacin" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="hacin" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_hacin" class="materialize-textarea"></textarea>
                    <label for="ta_hacin">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Adaptaciones y auxiliares para sus <br> actividaes de la vida diaria</td>
                <td>
                  <label>
                    <input class="with-gap" name="aya" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="aya" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_aya" class="materialize-textarea"></textarea>
                    <label for="ta_aya">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Servicios de agua</td>
                <td>
                  <label>
                    <input class="with-gap" name="sda" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sda" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sda" class="materialize-textarea"></textarea>
                    <label for="ta_sda">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Servicios de luz</td>
                <td>
                  <label>
                    <input class="with-gap" name="sdl" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sdl" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sdl" class="materialize-textarea"></textarea>
                    <label for="ta_sdl">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Servicios de drenaje inadecuados</td>
                <td>
                  <label>
                    <input class="with-gap" name="sdd" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sdd" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sdd" class="materialize-textarea"></textarea>
                    <label for="ta_sdd">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Hábitos personales de baño</td>
                <td>
                  <label>
                    <input class="with-gap" name="hpb" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="hpb" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_hpb" class="materialize-textarea"></textarea>
                    <label for="ta_hpb">¿Cuantas veces a la semana?</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Higiene bucal</td>
                <td>
                  <label>
                    <input class="with-gap" name="hb" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="hb" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_hb" class="materialize-textarea"></textarea>
                    <label for="ta_hb">¿Cuántas veces al día?</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Defecación</td>
                <td>
                  <label>
                    <input class="with-gap" name="def" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="antescedentes_hf" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_defec" class="materialize-textarea"></textarea>
                    <label for="ta_defec">¿Cuántas veces al día?</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tabaquismo</td>
                <td>
                  <label>
                    <input class="with-gap" name="taba" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="taba" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_taba" class="materialize-textarea"></textarea>
                    <label for="ta_taba">¿Cuántos cigarros al día?</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Alcoholismo</td>
                <td>
                  <label>
                    <input class="with-gap" name="alco" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="alco" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_alco" class="materialize-textarea"></textarea>
                    <label for="ta_alco">Frecuencia/Tipo/Tiempo</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Toxicomanías</td>
                <td>
                  <label>
                    <input class="with-gap" name="toxi" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="toxi" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_toxi" class="materialize-textarea"></textarea>
                    <label for="ta_toxi">Frecuencia/Tipo/Tiempo</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Alimentación</td>
                <td>
                  <label>
                    <input class="with-gap" name="alim" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="alim" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_alim" class="materialize-textarea"></textarea>
                    <label for="ta_alim">Frecuencia/Tipo</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Trabajo/Descanso</td>
                <td>
                  <label>
                    <input class="with-gap" name="trades" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="trades" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_trades" class="materialize-textarea"></textarea>
                    <label for="ta_trades">Tiempo/Sentado/Parado</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Pasatiempo</td>
                <td>
                  <label>
                    <input class="with-gap" name="pas" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="pas" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_pas" class="materialize-textarea"></textarea>
                    <label for="ta_pas">Tipo</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Deporte</td>
                <td>
                  <label>
                    <input class="with-gap" name="dep" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="dep" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_dep" class="materialize-textarea"></textarea>
                    <label for="ta_dep">Escribe aquí</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
        </div>
      </form>

      <div class="row">

      </div>

      {{-- Antescedentes Personales patologicos --}}
      <form class="" id="antescedentes_pp" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Antecedentes Personales Patologicos</h5>
          <table class="responsive-table striped">
            <thead>
              <tr>
                <th>Problema</th>
                <th>Si o No</th>
                <th>¿Cuál?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Enfermedades infecciosas de la infancia</td>
                <td>
                  <label>
                    <input class="with-gap" name="enf_inf" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="enf_inf" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_enf_inf" class="materialize-textarea"></textarea>
                    <label for="ta_enf_inf">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Intervenciones quirúrjicas</td>
                <td>
                  <label>
                    <input class="with-gap" name="inter" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="inter" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_inter" class="materialize-textarea"></textarea>
                    <label for="ta_inter">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Traumatismos(Esguinces, <br> fracturas, luxaciones, desgarres)</td>
                <td>
                  <label>
                    <input class="with-gap" name="trauma" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="trauma" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_trauma" class="materialize-textarea"></textarea>
                    <label for="ta_trauma">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Infiltraciones</td>
                <td>
                  <label>
                    <input class="with-gap" name="infi" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="infi" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_infi" class="materialize-textarea"></textarea>
                    <label for="ta_infi">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Hospitalizaciones</td>
                <td>
                  <label>
                    <input class="with-gap" name="hospi" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="hospi" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_hospi" class="materialize-textarea"></textarea>
                    <label for="ta_hospi">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Perdida del conocimiento</td>
                <td>
                  <label>
                    <input class="with-gap" name="per_con" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="per_con" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_per_con" class="materialize-textarea"></textarea>
                    <label for="ta_per_con">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Intolerancia a medicamentos</td>
                <td>
                  <label>
                    <input class="with-gap" name="int_med" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="int_med" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_int_med" class="materialize-textarea"></textarea>
                    <label for="ta_int_med">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Transfuciones</td>
                <td>
                  <label>
                    <input class="with-gap" name="trans" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="trans" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_trans" class="materialize-textarea"></textarea>
                    <label for="ta_trans">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Medicamentos</td>
                <td>
                  <label>
                    <input class="with-gap" name="meds" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="meds" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_meds" class="materialize-textarea"></textarea>
                    <label for="ta_meds">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Enfermedades de transmisión sexual</td>
                <td>
                  <label>
                    <input class="with-gap" name="ets" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ets" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ets" class="materialize-textarea"></textarea>
                    <label for="ta_ets">Escribe aquí</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
        </div>
      </form>

      <div class="row">

      </div>

      {{-- Antescedentes Gineco-obstétricos --}}
      <form class="" id="antescedentes_go" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Antecedentes Gineco-obstétricos</h5>
          <table class="responsive-table striped">
            <thead>
              <tr>
                <th>Problema</th>
                <th>Si o No</th>
                <th>¿Cuántos?</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Menarca</td>
                <td>
                  <label>
                    <input class="with-gap" name="menarca" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="menarca" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_menarca" class="materialize-textarea"></textarea>
                    <label for="ta_menarca">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="" type="text">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Ritmo Menstrual</td>
                <td>
                  <label>
                    <input class="with-gap" name="ritmo" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ritmo" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ritmo" class="materialize-textarea"></textarea>
                    <label for="ta_ritmo">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="" type="text">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Partos</td>
                <td>
                  <label>
                    <input class="with-gap" name="partos" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="partos" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_partos" class="materialize-textarea"></textarea>
                    <label for="ta_partos">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="" type="text">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Abortos</td>
                <td>
                  <label>
                    <input class="with-gap" name="abortos" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="abortos" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_abortos" class="materialize-textarea"></textarea>
                    <label for="ta_abortos">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="" type="text">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Cesáreas</td>
                <td>
                  <label>
                    <input class="with-gap" name="cesareas" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="cesareas" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_cesareas" class="materialize-textarea"></textarea>
                    <label for="ta_cesareas">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="" type="text">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Métodos anticonceptivos</td>
                <td>
                  <label>
                    <input class="with-gap" name="met_anti" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="met_anti" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_met_anti" class="materialize-textarea"></textarea>
                    <label for="ta_met_anti">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="" type="text">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
        </div>
      </form>

      <div class="row">

      </div>

      {{-- Padecimiento actual --}}
      <form class="" id="padecimiento_actual" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Padecimiento actual</h5>
          <div class="inicio">
            <h6 style="font-weight:bold; margin-bottom:30px;">Inicio</h6>
            <p class="range-field">
              <input type="range" id="eva_inicio" min="0" max="10" />
            </p>
            <div class="input-field col s12">
              <textarea id="ta_pad_inicio" class="materialize-textarea"></textarea>
              <label for="ta_pad_inicio">Escribe aquí</label>
            </div>
          </div>
          <div class="evolucion">
            <h6 style="font-weight:bold; margin-bottom:30px;">Evolucion</h6>
            <p class="range-field">
              <input type="range" id="eva_evolucion" min="0" max="10" />
            </p>
            <div class="input-field col s12">
              <textarea id="ta_pad_evol" class="materialize-textarea"></textarea>
              <label for="ta_pad_evol">Escribe aquí</label>
            </div>
          </div>
          <div class="actual">
            <h6 style="font-weight:bold; margin-bottom:30px;">Actual</h6>
            <p class="range-field">
              <input type="range" id="eva_actual" min="0" max="10" />
            </p>
            <div class="input-field col s12">
              <textarea id="ta_pad_actual" class="materialize-textarea"></textarea>
              <label for="ta_pad_actual">Escribe aquí</label>
            </div>
            <div class="row">

            </div>
            <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
          </div>
      </form>

      <div class="row">

      </div>

      {{-- Sintomas Generales --}}
      <form class="" id="sintomas_generales" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Sintomas Generales</h5>
          <table>
            <thead>
              <tr>
                <th>Sintoma</th>
                <th>Sí o No</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Astenia</td>
                <td>
                  <label>
                    <input class="with-gap" name="astenia" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="astenia" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Adinamia</td>
                <td>
                  <label>
                    <input class="with-gap" name="adinamia" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="adinamia" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Anorexia</td>
                <td>
                  <label>
                    <input class="with-gap" name="anorexia" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="anorexia" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Fiebre</td>
                <td>
                  <label>
                    <input class="with-gap" name="fiebre" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="fiebre" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Perdida de peso</td>
                <td>
                  <label>
                    <input class="with-gap" name="perd_peso" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="perd_peso" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
        </div>
      </form>

      <div class="row">

      </div>

      {{-- Aparatos y sistemas --}}
      <form class="" id="apa_sis" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Aparatos y Sistemas</h5>
          <table>
            <thead>
              <tr>
                <th>Aparato</th>
                <th>Sí o No</th>
                <th>¿Cuál?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Aparato Digestivo</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_diges" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_diges" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_diges" class="materialize-textarea"></textarea>
                    <label for="ta_ap_diges">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Cardiovacular</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_cardio" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_cardio" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_cardio" class="materialize-textarea"></textarea>
                    <label for="ta_ap_cardio">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Respiratorio</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_respi" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_respi" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_respi" class="materialize-textarea"></textarea>
                    <label for="ta_ap_respi">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Urinario</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_urin" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_urin" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_urin" class="materialize-textarea"></textarea>
                    <label for="taap_urin">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Genital</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_genital" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_genital" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_genital" class="materialize-textarea"></textarea>
                    <label for="ta_ap_genital">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Hematológico</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_hemato" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_hemato" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_hemato" class="materialize-textarea"></textarea>
                    <label for="ta_ap_hemato">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistema endocrino</td>
                <td>
                  <label>
                    <input class="with-gap" name="sis_endo" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sis_endo" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sis_endo" class="materialize-textarea"></textarea>
                    <label for="ta_sis_endo">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistema Nervioso</td>
                <td>
                  <label>
                    <input class="with-gap" name="sis_nerv" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sis_nerv" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sis_nerv" class="materialize-textarea"></textarea>
                    <label for="ta_sis_nerv">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistema Sensorial</td>
                <td>
                  <label>
                    <input class="with-gap" name="sis_senso" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sis_senso" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sis_senso" class="materialize-textarea"></textarea>
                    <label for="ta_sis_senso">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistema Osteomuscular</td>
                <td>
                  <label>
                    <input class="with-gap" name="sis_osteo" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sis_osteo" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sis_osteo" class="materialize-textarea"></textarea>
                    <label for="ta_sis_osteo">Escribe aquí</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
        </div>
      </form>

      <div class="row">

      </div>

      {{-- Diagnosticos anteriores --}}
    <form class="" id="diag_ant" action="" method="">
      <div class="row">
        <h5 style="font-weight:bold;">Diágnosticos Anteriores</h5>
        <div class="input-field col s12">
          <textarea id="ta_diag_ant" class="materialize-textarea"></textarea>
          <label for="ta_diag_ant">Diagnosticos Anteriores</label>
        </div>
        <div class="input-field col s12">
          <textarea id="ta_est_gab" class="materialize-textarea"></textarea>
          <label for="ta_est_gab">Estudios de gabinete/Estudios de laboratorio</label>
        </div>
        <div class="input-field col s12">
          <textarea id="ta_trat_ant" class="materialize-textarea"></textarea>
          <label for="ta_trat_ant">Tratamientos anteriores</label>
        </div>
        <div class="input-field col s12">
          <textarea id="ta_inquietud" class="materialize-textarea"></textarea>
          <label for="ta_inquietud">Inquietud subyacente</label>
        </div>
        <div class="row">

        </div>
        <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
      </div>
    </form>

    <div class="row">

    </div>

    {{-- Exploracion fisica --}}
  <form class="" id="explor_fisica" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Exploración Física</h5>
      <div class="input-field col s12 m3">
        <input type="text" id="ta" name="" value="">
        <label for="ta">T.A.</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="fc" name="" value="">
        <label for="fc">F.C.</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="fr" name="" value="">
        <label for="fc">F.R.</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="temp" name="" value="">
        <label for="temp">Temperatura</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="talla" name="" value="">
        <label for="temp">Talla</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="s02" name="" value="">
        <label for="s02">S02</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="peso_actual" name="" value="">
        <label for="peso_actual">Peso Actual</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="peso_anterior" name="" value="">
        <label for="peso_anterior">Peso Anterior</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="peso_ideal" name="" value="">
        <label for="peso_ideal">Peso Ideal</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" id="imc" name="" value="">
        <label for="imc">IMC</label>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  <div class="row">

  </div>

    {{-- Exploracion general--}}
  <form class="" id="explor_general" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Exploración General</h5>
      <div class="input-field col s12 m6">
        <input type="text" id="est_conci" name="" value="">
        <label for="est_conci">Estado de conciencia</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="acti" name="" value="">
        <label for="acti">Actitud</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="mov_anormales" name="" value="">
        <label for="mov_anormales">Movimientos anormales</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="postura" name="" value="">
        <label for="psotura">Postura</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="marcha" name="" value="">
        <label for="marcha">Marcha</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="est_nutri" name="" value="">
        <label for="est_nutri">Estado general de nutrición</label>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  <div class="row">

  </div>

  {{-- Exploracion por region--}}
  <form class="" id="explor_region" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Exploración por Región</h5>
      <div class="input-field col s12">
        <input type="text" id="piel" name="" value="">
        <label for="piel">Piel y anexos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="cabeza" name="" value="">
        <label for="cabeza">Cabeza</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="ojos" name="" value="">
        <label for="ojos">Ojos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="oidos" name="" value="">
        <label for="oidos">Oídos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="nariz_senos" name="" value="">
        <label for="nariz_senos">Nariz y senos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="boca" name="" value="">
        <label for="boca">Boca</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="torax" name="" value="">
        <label for="torax">Tórax</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="vasos_sang" name="" value="">
        <label for="vasos_sang">Vasos Sanguíneos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="mamas" name="" value="">
        <label for="mamas">Mamas</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="genitales" name="" value="">
        <label for="genitales">Genitales</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="abdomen" name="" value="">
        <label for="abdomen">Abdomen</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="otros" name="" value="">
        <label for="otros">Otros</label>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  <div class="row">

  </div>

  {{-- Sistemas Musculoesqueletico por regiones--}}
  <form class="" id="sis_muscu" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Sistema Musculoesquelético por Regiones</h5>
      <h6 style="font-weight:bold;">Columna</h6>
      <div class="input-field col s12">
        <input type="text" id="cervical" name="" value="">
        <label for="cervical">Cervical</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="dorso" name="" value="">
        <label for="dorso">Dorsolumbar</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="sacro" name="" value="">
        <label for="sacro">Sacroiliaca</label>
      </div>
      <h6 style="font-weight:bold;">Miembro Superior</h6>
      <div class="input-field col s12">
        <input type="text" id="hombros" name="" value="">
        <label for="hombros">Hombros</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="codo" name="" value="">
        <label for="codo">Codo</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="muñeca" name="" value="">
        <label for="muñeca">Muñeca</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="mano" name="" value="">
        <label for="mano">Mano</label>
      </div>
      <h6 style="font-weight:bold;">Miembro Inferior</h6>
      <div class="input-field col s12">
        <input type="text" id="cadera" name="" value="">
        <label for="cadera">Cadera</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="rodilla" name="" value="">
        <label for="rodilla">Rodilla</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="tobillo" name="" value="">
        <label for="tobillo">Tobillo</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="pie" name="" value="">
        <label for="pie">Pie (Pie equino, plano, cavo)</label>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  <div class="row">

  </div>

  {{-- Diagnostico Fisioterapeutico--}}
  <form class="" id="diagnostico_fisio" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Diagnostico Fisiterapéutico</h5>
      <div class="input-field col s12">
        <input type="text" id="diag_fisio" name="" value="">
        <label for="diag_fisio">Diagnostico fisioterapéutico</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="pronostico" name="" value="">
        <label for="pronostico">Pronóstico</label>
      </div>
      <h6 style="font-weight:bold;">Objetivos</h6>
      <div class="input-field col s12">
        <input type="text" id="obj1" name="" value="">
        <label for="obj1">Objetivo #1</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="obj2" name="" value="">
        <label for="obj2">Objetivo #2</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="obj3" name="" value="">
        <label for="obj3">Objetivo #3</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="obj4" name="" value="">
        <label for="obj4">Objetivo #4</label>
      </div>

      <div class="row">

      </div>

      <div class="input-field col s12">
        <textarea id="ta_plan_fisio" class="materialize-textarea"></textarea>
        <label for="ta_paln_fisio">Plan fisioterapéutico</label>
      </div>

      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>

    </div>
  </form>

  <div class="row">

  </div>

  {{-- Dermatomas, miotomas y pares craneales--}}
  <form class="" id="dermatomas_etc" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Dermatomas, miotomas y pares craneales</h5>
      <div class="contenedor row">
        <img class="col s8 push-s2 responsive-img" src="{{ asset('img/musculos1.png') }}" alt="">
      </div>
      <div class="input-field col s12">
        <textarea id="ta_dermatomas" class="materialize-textarea"></textarea>
        <label for="ta_dermatomas">Escribe aquí</label>
      </div>

      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>

    </div>
  </form>

  <div class="row">

  </div>

  {{-- Mapa de Dolor--}}
  <form class="" id="mapa_dolor" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Mapa de Dolor</h5>
      <div class="contenedor row">
        <img class="col s12 responsive-img" src="{{ asset('img/musculos2.png') }}" alt="">
      </div>
      <div class="row contenedor">
        <div class="col s6 push-s3">
          <label>
            <input class="with-gap" name="color" type="radio"/>
            <span>Rojo</span>
          </label>
          <label>
            <input class="with-gap" name="color" type="radio"/>
            <span>Amarillo</span>
          </label>
        </div>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  {{-- Arcos de Movimiento--}}
  <form class="" id="arcos_movimiento" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Arcos de Movimiento</h5>
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>Parte del cuerpo</th>
            <th>Flexión</th>
            <th>Extensión</th>
            <th>Rotación interna</th>
            <th>Rotación externa</th>
            <th>Abducción</th>
            <th>Aducción</th>
            <th>Desviación radial</th>
            <th>Desviación cubital</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Columna cervical</th>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Columna dorsal</th>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Columna lumbar</th>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Hombro</th>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Codo</th>
            <td>
              <div class="input-field">
                <input type="text" id="codo_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Muñeca</th>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Mano</th>
            <td>
              <div class="input-field">
                <input type="text" id="mano_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Cadera</th>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Rodilla</th>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Tobillo</th>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Pie</th>
            <td>
              <div class="input-field">
                <input type="text" id="pie_flex" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_exten" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_rotintern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_rotextern" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_abdu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_adu" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_desvrad" name="" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_desvcubi" name="" value="">
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
      </div>
  </form>

  <div class="row">

  </div>

  {{-- Par Nervio--}}
  <form class="" id="par_nervio" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Par Nervio</h5>
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>Par</th>
            <th>Nervio</th>
            <th>Información</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>I</td>
            <td>Olfatorio</td>
            <td>
              <textarea id="ta_olfatorio" class="materialize-textarea"></textarea>
              <label for="ta_olfatorio">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>II</td>
            <td>Óptico</td>
            <td>
              <textarea id="ta_optico" class="materialize-textarea"></textarea>
              <label for="ta_optico">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>III</td>
            <td>Motor ocular común</td>
            <td>
              <textarea id="ta_mot_ocular_com" class="materialize-textarea"></textarea>
              <label for="ta_mot_ocular_com">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>IV</td>
            <td>Patético o troclear</td>
            <td>
              <textarea id="ta_patetico" class="materialize-textarea"></textarea>
              <label for="ta_patetico">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>V</td>
            <td>Trigémino</td>
            <td>
              <textarea id="ta_trige" class="materialize-textarea"></textarea>
              <label for="ta_trige">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>VI</td>
            <td>Motor ocular externo</td>
            <td>
              <textarea id="ta_mot_ocular_ext" class="materialize-textarea"></textarea>
              <label for="ta_mot_ocular_ext">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>VII</td>
            <td>Facial</td>
            <td>
              <textarea id="ta_facial" class="materialize-textarea"></textarea>
              <label for="ta_facial">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>VIII</td>
            <td>Auditivo</td>
            <td>
              <textarea id="ta_auditivo" class="materialize-textarea"></textarea>
              <label for="ta_auditivo">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>IX</td>
            <td>Glosofaríngeo</td>
            <td>
              <textarea id="ta_gloso" class="materialize-textarea"></textarea>
              <label for="ta_gloso">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>X</td>
            <td>Vago</td>
            <td>
              <textarea id="ta_vago" class="materialize-textarea"></textarea>
              <label for="ta_vago">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>XI</td>
            <td>Espinal</td>
            <td>
              <textarea id="ta_espinal" class="materialize-textarea"></textarea>
              <label for="ta_espinal">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>XII</td>
            <td>Hipogloso</td>
            <td>
              <textarea id="ta_hipogloso" class="materialize-textarea"></textarea>
              <label for="ta_hipogloso">Escribe aquí</label>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  <div class="row">

  </div>

  {{-- Escala de ashwoth --}}
  <form class="" id="mapa_dolor" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Escala de ashworth</h5>
      <p class="range-field">
        <input type="range" id="eva_evolucion" min="0" max="4" />
      </p>
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tono musscular normal</td>
            <td>Hipertonía leve</td>
            <td>Hipertonía moderada</td>
            <td>Hipertonía intensa</td>
            <td>Hipertonía extrema</td>
          </tr>
        </tbody>
      </table>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  <div class="row">

  </div>

  {{-- Reflejos Osteotendinosos --}}
  <form class="" id="mapa_dolor" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Reflejos osteotendinosos</h5>
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>Metámera</th>
            <th>Nervio</th>
            <th>Reflejo</th>
            <th>Información</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Par V</td>
            <td>Trigémino</td>
            <td>Maseterino</td>
            <td>
              <textarea id="ta_maseterino" class="materialize-textarea"></textarea>
              <label for="ta_maseterino">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>C5 y C6</td>
            <td>Musculocutáneo</td>
            <td>Bicipital</td>
            <td>
              <textarea id="ta_bicipital" class="materialize-textarea"></textarea>
              <label for="ta_bicipital">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>C5 y C6</td>
            <td>Radial</td>
            <td>Estilorradical</td>
            <td>
              <textarea id="ta_estilo" class="materialize-textarea"></textarea>
              <label for="ta_estilo">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>C6, C7 y C8</td>
            <td>Radial</td>
            <td>Tricipital</td>
            <td>
              <textarea id="ta_tricipital" class="materialize-textarea"></textarea>
              <label for="ta_tricipital">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>L2, L3 y L4</td>
            <td>Crural</td>
            <td>Rotuliano</td>
            <td>
              <textarea id="ta_rotul" class="materialize-textarea"></textarea>
              <label for="ta_rotul">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>L5, S1 y S2</td>
            <td>Tibial</td>
            <td>Aquíleo</td>
            <td>
              <textarea id="ta_aquileo" class="materialize-textarea"></textarea>
              <label for="ta_aquileo">Escribe aquí</label>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  <div class="row">

  </div>

  {{-- Tipo de marcha --}}
  <form class="" id="mapa_dolor" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Tipo de marcha</h5>
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>Marcha</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hemiparética/Hemipléjica</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Cerebelosa/Atáxica</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Paraparética</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Hipocinética/Parkinsoniana</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Vestibular</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Marcha de las correas</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Marcha de la ataxia sensorial</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Marcha de las miopatías</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Marcha histerica</td>
            <td>
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>


  </div>
@endsection

@section('scripts')
    
@endsection

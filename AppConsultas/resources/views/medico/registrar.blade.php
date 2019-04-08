@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/medico/registrar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Registrar Paciente')

@section('content')
    <div class="row">
      <div class="contenedor col s12 m8 push-m2">
        <h2>Historia Clínica</h4>
      </div>
    </div>

    <div class="section container">

      {{-- Ficha de identificacion --}}
    <form class="" id="ficha_id" action="" method="">
      <div class="row">
        <h6 style="font-weight:bold;">Ficha de Identificacion</h6>
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
        <button class="col s4 m4 push-s8 push-m8 btn waves-effect waves-light" type="" name="action">Siguiente</button>
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
          <h6 style="font-weight:bold;">Antescedentes Familiares</h6>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button class="col s4 m4 btn waves-effect waves-light" type="" name="action">Anterior</button>
          <button class="col s4 m4 push-s4 push-m4 btn waves-effect waves-light" type="" name="action">Siguiente</button>
        </div>
      </form>

      {{-- Antescedentes Personales no patologicos --}}
      <form class="" id="antescedentes_pnp" action="" method="">
        <div class="row">
          <h6 style="font-weight:bold;">Antescedentes Personales no Patologicos</h6>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">¿Cuantas veces a la semana?</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">¿Cuántas veces al día?</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">¿Cuántas veces al día?</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">¿Cuántos cigarros al día?</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Frecuencia/Tipo/Tiempo</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Frecuencia/Tipo/Tiempo</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Frecuencia/Tipo</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Tiempo/Sentado/Parado</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Tipo</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button class="col s4 m4 btn waves-effect waves-light" type="" name="action">Anterior</button>
          <button class="col s4 m4 push-s4 push-m4 btn waves-effect waves-light" type="" name="action">Siguiente</button>
      </form>

      <div class="row">

      </div>

      {{-- Antescedentes Personales patologicos --}}
      <form class="" id="antescedentes_pp" action="" method="">
        <div class="row">
          <h6 style="font-weight:bold;">Antescedentes Personales Patologicos</h6>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="row">

          </div>
          <button class="col s4 m4 btn waves-effect waves-light" type="" name="action">Anterior</button>
          <button class="col s4 m4 push-s4 push-m4 btn waves-effect waves-light" type="" name="action">Siguiente</button>
      </form>

      <div class="row">

      </div>

      {{-- Antescedentes Personales patologicos --}}
      <form class="" id="antescedentes_go" action="" method="">
        <div class="row">
          <h6 style="font-weight:bold;">Antescedentes Gineco-obstétricos</h6>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
                    <textarea id="ta_enf_reu" class="materialize-textarea"></textarea>
                    <label for="ta_enf_reu">Escribe aquí</label>
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
          <button class="col s4 m4 btn waves-effect waves-light" type="" name="action">Anterior</button>
          <button class="col s4 m4 push-s4 push-m4 btn waves-effect waves-light" type="" name="action">Siguiente</button>
      </form>



  </div>
@endsection

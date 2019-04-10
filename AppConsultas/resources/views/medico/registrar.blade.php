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
        <h5 style="font-weight:bold;">Ficha de Identificacion</h5>
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
          <input id="tel1" type="tel" class="validate">
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
          <h5 style="font-weight:bold;">Antescedentes Familiares</h5>
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
        </div>
      </form>

      {{-- Antescedentes Personales no patologicos --}}
      <form class="" id="antescedentes_pnp" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Antescedentes Personales no Patologicos</h5>
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
      </form>

      <div class="row">

      </div>

      {{-- Antescedentes Personales patologicos --}}
      <form class="" id="antescedentes_pp" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Antescedentes Personales Patologicos</h5>
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
      </form>

      <div class="row">

      </div>

      {{-- Antescedentes Gineco-obstétricos --}}
      <form class="" id="antescedentes_go" action="" method="">
        <div class="row">
          <h5 style="font-weight:bold;">Antescedentes Gineco-obstétricos</h5>
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


    </div>
  </form>

  </div>
@endsection

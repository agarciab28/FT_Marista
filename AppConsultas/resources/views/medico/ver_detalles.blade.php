@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/medico/detalles.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Ver Detalles')

@section('content')
  <div class="fixed-action-btn" onclick="backTop()">
    <a class="btn-floating btn-large">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif

    <div class="row">
      <div class="contenedor col s12 m8 push-m2">
        <h2>Detalles{{-- $idpac --}}</h4>
      </div>
    </div>

    <div class="row">
      <ul class="collapsible col s12 m10 push-m1">
      <li>
        <div class="collapsible-header"><i class="material-icons">menu</i>Menú </div>
        <div class="collapsible-body">
          <div class="row botones">
            <button type="submit" class="btn class s4 menu" onclick="antecedentesHF()" >Antecedentes Heredo Familiares</button>
            <button type="submit" class="btn class s4 menu" onclick="antecedentesPNP()" >Antecedentes Personales no Patológicos</button>
            <button type="button" class="btn class s4 menu" onclick="antecedentesPP()" >Antescedentes Personales Patológicos</button>
            <button type="button" class="btn class s4 menu" onclick="antecedentesGO()" >Antecedentes Gineco Obstetricos</button>
            <button type="button" class="btn class s4 menu" onclick="padecimientoActual()" >Padecimiento Actual</button>
            <button type="button" class="btn class s4 menu" onclick="sintomasGenerales()" >Sintomas Generales</button>
            <button type="button" class="btn class s4 menu" onclick="aparatosSistemas()" >Aparatos y Sistemas</button>
            <button type="button" class="btn class s4 menu" onclick="diagnosticosAnteriores()" >Diagnósticos Anteriores</button>
            <button type="button" class="btn class s4 menu" onclick="exploracionFisica()" >Exploración Física</button>
            <button type="button" class="btn class s4 menu" onclick="exploracionGeneral()" >Exploración General</button>
            <button type="button" class="btn class s4 menu" onclick="exploracionRegion()" >Exploración por Región</button>
            <button type="button" class="btn class s4 menu" onclick="sistemaMusculoEs()" >Sistema Musculo Esqueletico</button>
            <button type="button" class="btn class s4 menu" onclick="diagnosticoFisio()" >Diagnóstico Fisioterapéutico</button>
            <button type="button" class="btn class s4 menu" onclick="dermatomas()" >Dermatomas</button>
            <button type="button" class="btn class s4 menu" onclick="mapaDolor()" >Mapa de Dolor</button>
            <button type="button" class="btn class s4 menu" onclick="arcosMovimiento()" >Arcos de Movimiento</button>
            <button type="button" class="btn class s4 menu" onclick="parNervio()" >Par/Nervio</button>
            <button type="button" class="btn class s4 menu" onclick="escalaAshworth()" >Escala de Ashworth</button>
            <button type="button" class="btn class s4 menu" onclick="reflejosOsteo()" >Reflejos Osteotendinosos</button>
            <button type="button" class="btn class s4 menu" onclick="tiposMarcha()" >Tipos de Marcha</button>
          </div>
        </div>
      </li>
    </ul>
    </div>


    <div class="section container">

        <form class="" id="antecedentes_hf" action="" method="POST">
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
                    <input type="checkbox" value="por parte de madre" name="madre1" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de padre"   name="padre1" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de abuelos" name="abuelos1" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" name="hermanos1"  value="por parte de hermanos" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" name="otros1"  value="por parte de otros" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_enf_reu" name="ta_enf_reu" class="materialize-textarea"></textarea>
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
                    <input type="checkbox" value="por parte de madre" name="madre2" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de padre" name="padre2" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de abuelos" name="abuelos2" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de hermanos" name="hermanos2" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de otros" name="otros2" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_enf_sisnerv" name="ta_enf_sisnerv" class="materialize-textarea"></textarea>
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
                    <input type="checkbox" value="por parte de madre" name="madre3" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de padre" name="padre3" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de abuelos" name="abuelos3" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de hermanos" name="hermanos3" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de otros" name="otros3" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sindromes" name="ta_sindromes" class="materialize-textarea"></textarea>
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
                    <input type="checkbox" value="por parte de madre" name="madre4" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de padre" name="padre4" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de abuelos" name="abuelos4" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de hermanos" name="hermanos4" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" value="por parte de otros" name="otros4" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_malfor" name="ta_malfor" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"  value="por parte de madre" name="madre5" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de padre" name="padre5" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de abuelos" name="abuelos5" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de hermanos" name="hermanos5" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de otros" name="otros5" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_congenitas" name="ta_congenitas" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"  value="por parte de madre" name="madre6" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de padre" name="padre6" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de abuelos" name="abuelos6" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de hermanos" name="hermanos6" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"  value="por parte de otros" name="otros6" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_diabetes" name="ta_diabetes" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre7" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre7" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos7" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos7" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros7" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_hiper_art" name="ta_hiper_art" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre8" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre8" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos8" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos8" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros8" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_cancer" name="ta_cancer" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre9" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre9" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos9" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos9" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros9" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_cardio" name="ta_cardio" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre10" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre10" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos10" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos10" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros10" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_vascu" name="ta_vascu" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre11" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre11" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos11" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos11" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros11" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_pulmon" name="ta_pulmon" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre12" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre12" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos12" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos12" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros12" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_hepto" name="ta_hepto" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre13" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre13" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos13" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos13" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros13" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_nefro" name="ta_nefro" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre14" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre14" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos14" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos14" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros14" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_diges" name="ta_diges" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre15" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre15" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos15" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos15" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros15" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_endo" name="ta_endo" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre16" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre16" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos16" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos16" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros16" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_trans_hemato" name="ta_trans_hemato" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre17" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre17" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos17" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos17" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros17" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_disli" name="ta_disli" class="materialize-textarea"></textarea>
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
                    <input type="checkbox"   value="por parte de madre" name="madre18" class="filled-in"/>
                    <span>Madre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de padre" name="padre18" class="filled-in"/>
                    <span>Padre</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de abuelos" name="abuelos18" class="filled-in"/>
                    <span>Abuelos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de hermanos" name="hermanos18" class="filled-in"/>
                    <span>Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox"   value="por parte de otros" name="otros18" class="filled-in"/>
                    <span>Otros</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_otros" name="ta_otros" class="materialize-textarea"></textarea>
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



      {{-- Antecedentes Personales no patologicos --}}
      <form class="" id="antecedentes_pnp" action="" method="POST">
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
                    <textarea id="ta_construc" name="ta_construc" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_suelo" name="ta_suelo" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_escaleras" name="ta_escaleras" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_vent" name="ta_vent" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_hacin" name="ta_hacin" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_aya" name="ta_aya" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_sda" name="ta_sda" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_sdl" name="ta_sdl" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_sdd" name="ta_sdd" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_hpb" name="ta_hpb" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_hb" name="ta_hb" class="materialize-textarea"></textarea>
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
                    <input class="with-gap" name="antecedentes_hf" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_defec" name="ta_defec" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_taba" name="ta_taba" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_alco" name="ta_alco" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_toxi" name="ta_toxi" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_alim" name="ta_alim" class="materialize-textarea"></textarea>
                    <label for="ta_alim">Frecuencia/Tipo</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Inmunizaciones</td>
                <td>
                  <label>
                    <input class="with-gap" name="inm" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="inm" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_inmun" name="ta_inmun" class="materialize-textarea"></textarea>
                    <label for="ta_inmun">Cuales</label>
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
                    <textarea id="ta_trades" name="ta_trades" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_pas" name="ta_pas" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_dep" name="ta_dep" class="materialize-textarea"></textarea>
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



      {{-- Antecedentes Personales patologicos --}}
      <form class="" id="antecedentes_pp" action="" method="POST">
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
                    <textarea id="ta_enf_inf" name="ta_enf_inf" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_inter" name="ta_inter" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_trauma" name="ta_trauma" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_infi" name="ta_infi" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_hospi" name="ta_hospi" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_per_con" name="ta_per_con" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_int_med" name="ta_int_med" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_trans" name="ta_trans" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_meds" name="ta_meds" class="materialize-textarea"></textarea>
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
                    <textarea id="ta_ets" name="ta_ets" class="materialize-textarea"></textarea>
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

      {{-- Antecedentes Gineco-obstétricos --}}
      <form class="" id="antecedentes_go" action="" method="POST">
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
                    <textarea id="ta_menarca" name="ta_menarca" class="materialize-textarea"></textarea>
                    <label for="ta_menarca">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="fecha1" name="fecha1" type="date" class="datepicker">
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
                    <textarea id="ta_ritmo" name="ta_ritmo" class="materialize-textarea"></textarea>
                    <label for="ta_ritmo">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="fecha2" name="fecha2" class="datepicker" type="date">
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
                    <textarea id="ta_partos" name="ta_partos" class="materialize-textarea"></textarea>
                    <label for="ta_partos">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="fecha3" name="fecha3" class="datepicker" type="date">
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
                    <textarea id="ta_abortos" name="ta_abortos" class="materialize-textarea"></textarea>
                    <label for="ta_abortos">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="fecha4" name="fecha4" class="datepicker" type="date">
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
                    <textarea id="ta_cesareas" name="ta_cesareas" class="materialize-textarea"></textarea>
                    <label for="ta_cesareas">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="fecha5" name="fecha5" class="datepicker" type="date">
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
                    <textarea id="ta_met_anti" name="ta_met_anti" class="materialize-textarea"></textarea>
                    <label for="ta_met_anti">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="fecha6" name="fecha6" class="datepicker" type="date">
                  </div>
                </td>
              </tr>

              <tr>
                <td>F.U.M</td>
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
                    <textarea id="ta_fum" name="ta_fum" class="materialize-textarea"></textarea>
                    <label for="ta_fum">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="fecha7" name="fecha7" class="datepicker" type="date">
                  </div>
                </td>
              </tr>

              <tr>
                <td>I.V.S.A</td>
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
                    <textarea id="ta_ivsa" name="ta_ivsa" class="materialize-textarea"></textarea>
                    <label for="ta_ivsa">Escribe aquí</label>
                  </div>
                </td>
                <td>
                  <div class="input-field col s12">
                    <input id="fecha8" name="fecha8" class="datepicker" type="date">
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

      {{-- Padecimiento actual --}}
      <form class=""  id="padecimiento_actual" action="" method="POST">
        <div class="row" >
          <h5 style="font-weight:bold;">Padecimiento actual</h5>
          <div class="inicio">
            <h6 style="font-weight:bold; margin-bottom:30px;">Inicio</h6>
            <p class="range-field">
              <input type="range" id="eva_inicio" name="eva_inicio"class="eva_inicio" min="0" max="10">
            </p>
            <div class="input-field col s12">
              <textarea id="ta_pad_inicio" name="ta_pad_inicio" class="materialize-textarea"></textarea>
              <label for="ta_pad_inicio">Escribe aquí</label>
            </div>
          </div>
          <div class="evolucion">
            <h6 style="font-weight:bold; margin-bottom:30px;">Evolucion</h6>
            <p class="range-field">
              <input type="range" id="eva_evolucion" name="eva_evolucion" min="0" max="10" />
            </p>
            <div class="input-field col s12">
              <textarea id="ta_pad_evol" name="ta_pad_evol" class="materialize-textarea"></textarea>
              <label for="ta_pad_evol">Escribe aquí</label>
            </div>
          </div>
          <div class="actual">
            <h6 style="font-weight:bold; margin-bottom:30px;">Actual</h6>
            <p class="range-field">
              <input type="range" id="eva_actual" name="eva_actual" min="0" max="10">
            </p>
            <div class="input-field col s12">
              <textarea id="ta_pad_actual" name="ta_pad_actual" class="materialize-textarea"></textarea>
              <label for="ta_pad_actual">Escribe aquí</label>
            </div>
            <div class="row">

            </div>
            <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
          </div>
        </div>
      </form>


      {{-- Sintomas Generales --}}
      <form class="" id="sintomas_generales" action="" method="POST">
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
                    <input class="with-gap" name="astenia" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="astenia" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Adinamia</td>
                <td>
                  <label>
                    <input class="with-gap" name="adinamia" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="adinamia" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Anorexia</td>
                <td>
                  <label>
                    <input class="with-gap" name="anorexia" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="anorexia" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Fiebre</td>
                <td>
                  <label>
                    <input class="with-gap" name="fiebre" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="fiebre" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
              </tr>
              <tr>
                <td>Perdida de peso</td>
                <td>
                  <label>
                    <input class="with-gap" name="perd_peso" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="perd_peso" value="No" type="radio"/>
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


      {{-- Aparatos y sistemas --}}
      <form class="" id="apa_sis" action="" method="POST">
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
                    <input class="with-gap" name="ap_diges" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_diges" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_diges" name="ta_ap_diges" class="materialize-textarea"></textarea>
                    <label for="ta_ap_diges">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Cardiovacular</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_cardio" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_cardio" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_cardio" name="ta_ap_cardio" class="materialize-textarea"></textarea>
                    <label for="ta_ap_cardio">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Respiratorio</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_respi" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_respi" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_respi" name="ta_ap_respi" class="materialize-textarea"></textarea>
                    <label for="ta_ap_respi">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Urinario</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_urin" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_urin" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_urin" name="ta_ap_urin" class="materialize-textarea"></textarea>
                    <label for="taap_urin">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Genital</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_genital" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_genital" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_genital" name="ta_ap_genital" class="materialize-textarea"></textarea>
                    <label for="ta_ap_genital">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Aparato Hematológico</td>
                <td>
                  <label>
                    <input class="with-gap" name="ap_hemato" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="ap_hemato" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_ap_hemato" name="ta_ap_hemato" class="materialize-textarea"></textarea>
                    <label for="ta_ap_hemato">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistema endocrino</td>
                <td>
                  <label>
                    <input class="with-gap" name="sis_endo" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sis_endo" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sis_endo" name="ta_sis_endo" class="materialize-textarea"></textarea>
                    <label for="ta_sis_endo">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistema Nervioso</td>
                <td>
                  <label>
                    <input class="with-gap" name="sis_nerv" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sis_nerv" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sis_nerv" name="ta_sis_nerv" class="materialize-textarea"></textarea>
                    <label for="ta_sis_nerv">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistema Sensorial</td>
                <td>
                  <label>
                    <input class="with-gap" name="sis_senso" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sis_senso" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sis_senso" name="ta_sis_senso" class="materialize-textarea"></textarea>
                    <label for="ta_sis_senso">Escribe aquí</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistema Osteomuscular</td>
                <td>
                  <label>
                    <input class="with-gap" name="sis_osteo" value="Si" type="radio"/>
                    <span>Sí</span>
                  </label>
                  <label>
                    <input class="with-gap" name="sis_osteo" value="No" type="radio"/>
                    <span>No</span>
                  </label>
                </td>
                <td>
                  <div class="input-field col s12">
                    <textarea id="ta_sis_osteo" name="ta_sis_osteo" class="materialize-textarea"></textarea>
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

      {{-- Diagnosticos anteriores --}}
    <form class="" id="diag_ant" action="" method="POST">
      {{ csrf_field() }}
      <div class="row">
        <h5 style="font-weight:bold;">Diágnosticos Anteriores</h5>
        <div class="input-field col s12">
          <textarea id="ta_diag_ant" name="ta_diag_ant" class="materialize-textarea"></textarea>
          <label for="ta_diag_ant">Diagnosticos Anteriores</label>
        </div>
        <div class="input-field col s12">
          <textarea id="ta_est_gab" name="ta_est_gab" class="materialize-textarea"></textarea>
          <label for="ta_est_gab">Estudios de gabinete/Estudios de laboratorio</label>
        </div>
        <div class="input-field col s12">
          <textarea id="ta_trat_ant" name="ta_trat_ant" class="materialize-textarea"></textarea>
          <label for="ta_trat_ant">Tratamientos anteriores</label>
        </div>
        <div class="input-field col s12">
          <textarea id="ta_inquietud" name="ta_inquietud" class="materialize-textarea"></textarea>
          <label for="ta_inquietud">Inquietud subyacente</label>
        </div>
        <div class="row">

        </div>
        <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
      </div>
    </form>

    {{-- Exploracion fisica --}}
  <form class="" id="explor_fisica" action="" method="POST">
    {{ csrf_field() }}
    <div class="row">
      <h5 style="font-weight:bold;">Exploración Física</h5>
      <div class="input-field col s12 m3">
        <input type="number" id="t_a" name="t_a" value="">
        <label for="t_a">T.A.</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="fc" name="fc" value="">
        <label for="fc">F.C.</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="fr" name="fr" value="">
        <label for="fc">F.R.</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="temp" name="temp" value="">
        <label for="temp">Temperatura</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="talla" name="talla" value="">
        <label for="temp">Talla</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="s02" name="s02" value="">
        <label for="s02">S02</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="peso_actual" name="peso_actual" value="">
        <label for="peso_actual">Peso Actual</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="peso_anterior" name="peso_anterior" value="">
        <label for="peso_anterior">Peso Anterior</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="peso_ideal" name="peso_ideal" value="">
        <label for="peso_ideal">Peso Ideal</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="number" id="imc" name="imc" value="">
        <label for="imc">IMC</label>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

    {{-- Exploracion general--}}
  <form class="" id="explor_general" action="" method="POST">
    <div class="row">
      <h5 style="font-weight:bold;">Exploración General</h5>
      <div class="input-field col s12 m6">
        <input type="text" id="est_conci" name="est_conci" value="">
        <label for="est_conci">Estado de conciencia</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="acti" name="acti" value="">
        <label for="acti">Actitud</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="mov_anormales" name="mov_anormales" value="">
        <label for="mov_anormales">Movimientos anormales</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="postura" name="postura" value="">
        <label for="psotura">Postura</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="marcha" name="marcha" value="">
        <label for="marcha">Marcha</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="est_nutri" name="est_nutri" value="">
        <label for="est_nutri">Estado general de nutrición</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="fuer_m" name="fuer_m" value="">
        <label for="fuer_m">Fuerza muscular</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="text" id="prub_fun" name="prub_fun" value="">
        <label for="prub_fun">Pruebas funcionales</label>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  {{-- Exploracion por region--}}
  <form class="" id="explor_region" action="" method="POST">
    <div class="row">
      <h5 style="font-weight:bold;">Exploración por Región</h5>
      <div class="input-field col s12">
        <input type="text" id="piel" name="piel" value="">
        <label for="piel">Piel y anexos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="cabeza" name="cabeza" value="">
        <label for="cabeza">Cabeza</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="ojos" name="ojos" value="">
        <label for="ojos">Ojos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="oidos" name="oidos" value="">
        <label for="oidos">Oídos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="nariz_senos" name="nariz_senos" value="">
        <label for="nariz_senos">Nariz y senos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="boca" name="boca" value="">
        <label for="boca">Boca</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="torax" name="torax" value="">
        <label for="torax">Tórax</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="vasos_sang" name="vasos_sang" value="">
        <label for="vasos_sang">Vasos Sanguíneos</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="mamas" name="mamas" value="">
        <label for="mamas">Mamas</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="genitales" name="genitales" value="">
        <label for="genitales">Genitales</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="abdomen" name="abdomen" value="">
        <label for="abdomen">Abdomen</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="otros" name="otros" value="">
        <label for="otros">Otros</label>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  {{-- Sistemas Musculoesqueletico por regiones--}}
  <form class="" id="sis_muscu" action="" method="POST">
    <div class="row">
      <h5 style="font-weight:bold;">Sistema Musculoesquelético por Regiones</h5>
      <h6 style="font-weight:bold;">Columna</h6>
      <div class="input-field col s12">
        <input type="text" id="cervical" name="cervical" value="">
        <label for="cervical">Cervical</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="dorso" name="dorso" value="">
        <label for="dorso">Dorsolumbar</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="sacro" name="sacro" value="">
        <label for="sacro">Sacroiliaca</label>
      </div>
      <h6 style="font-weight:bold;">Miembro Superior</h6>
      <div class="input-field col s12">
        <input type="text" id="hombros" name="hombros" value="">
        <label for="hombros">Hombros</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="codo" name="codo" value="">
        <label for="codo">Codo</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="muñeca" name="muñeca" value="">
        <label for="muñeca">Muñeca</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="mano" name="mano" value="">
        <label for="mano">Mano</label>
      </div>
      <h6 style="font-weight:bold;">Miembro Inferior</h6>
      <div class="input-field col s12">
        <input type="text" id="cadera" name="cadera" value="">
        <label for="cadera">Cadera</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="rodilla" name="rodilla" value="">
        <label for="rodilla">Rodilla</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="tobillo" name="tobillo" value="">
        <label for="tobillo">Tobillo</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="pie" name="pie" value="">
        <label for="pie">Pie (Pie equino, plano, cavo)</label>
      </div>
      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>
    </div>
  </form>

  {{-- Diagnostico Fisioterapeutico--}}
  <form class="" id="diagnostico_fisio" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Diagnostico Fisiterapéutico</h5>
      <div class="input-field col s12">
        <input type="text" id="diag_fisio" name="diag_fisio" value="">
        <label for="diag_fisio">Diagnostico fisioterapéutico</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="pronostico" name="pronostico" value="">
        <label for="pronostico">Pronóstico</label>
      </div>
      <h6 style="font-weight:bold;">Objetivos</h6>
      <div class="input-field col s12">
        <input type="text" id="obj1" name="obj1" value="">
        <label for="obj1">Objetivo #1</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="obj2" name="obj2" value="">
        <label for="obj2">Objetivo #2</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="obj3" name="obj3" value="">
        <label for="obj3">Objetivo #3</label>
      </div>
      <div class="input-field col s12">
        <input type="text" id="obj4" name="obj4" value="">
        <label for="obj4">Objetivo #4</label>
      </div>

      <div class="row">

      </div>

      <div class="input-field col s12">
        <textarea id="ta_plan_fisio" name="ta_plan_fisio" class="materialize-textarea"></textarea>
        <label for="ta_paln_fisio">Plan fisioterapéutico</label>
      </div>

      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>

    </div>
  </form>

  {{-- Dermatomas, miotomas y pares craneales--}}
  <form class="" id="dermatomas_etc" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Dermatomas, miotomas y pares craneales</h5>
      <div class="contenedor row">
        <img class="col s8 push-s2 responsive-img" src="{{ asset('img/musculos1.png') }}" alt="">
      </div>
      <div class="input-field col s12">
        <textarea id="ta_dermatomas" name="ta_dermatomas" class="materialize-textarea"></textarea>
        <label for="ta_dermatomas">Escribe aquí</label>
      </div>

      <div class="row">

      </div>
      <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar</button>

    </div>
  </form>

  {{-- Mapa de Dolor--}}
  <form class="" id="mapa_dolor" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Mapa de Dolor</h5>
      <div class="contenedor row">
        <img class="col s12 responsive-img" src="{{ asset('img/musculos2.png') }}" usemap="#image-map" alt="">
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
  <form class="" id="arcos_movimiento" action="" method="POST">
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
                <input type="text" id="columcerv_flex" name="columcerv_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_exten" name="columcerv_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_rotintern" name="columcerv_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_rotextern" name="columcerv_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_abdu" name="columcerv_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_adu" name="columcerv_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_desvrad" name="columcerv_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columcerv_desvcubi" name="columcerv_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Columna dorsal</th>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_flex" name="columdors_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_exten" name="columdors_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_rotintern" name="columdors_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_rotextern" name="columdors_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_abdu" name="columdors_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_adu" name="columdors_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_desvrad" name="columdors_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columdors_desvcubi" name="columdors_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Columna lumbar</th>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_flex" name="columlumb_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_exten" name="columlumb_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_rotintern" name="columlumb_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_rotextern" name="columlumb_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_abdu" name="columlumb_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_adu" name="columlumb_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_desvrad" name="columlumb_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="columlumb_desvcubi" name="columlumb_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Hombro</th>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_flex" name="hombro_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_exten" name="hombro_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_rotintern" name="hombro_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_rotextern" name="hombro_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_abdu" name="hombro_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_adu" name="hombro_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_desvrad" name="hombro_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="hombro_desvcubi" name="hombro_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Codo</th>
            <td>
              <div class="input-field">
                <input type="text" id="codo_flex" name="codo_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_exten" name="codo_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_rotintern" name="codo_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_rotextern" name="codo_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_abdu" name="codo_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_adu" name="codo_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_desvrad" name="codo_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="codo_desvcubi" name="codo_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Muñeca</th>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_flex" name="muñeca_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_exten" name="muñeca_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_rotintern" name="muñeca_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_rotextern" name="muñeca_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_abdu" name="muñeca_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_adu" name="muñeca_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_desvrad" name="muñeca_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="muñeca_desvcubi" name="muñeca_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Mano</th>
            <td>
              <div class="input-field">
                <input type="text" id="mano_flex" name="mano_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_exten" name="mano_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_rotintern" name="mano_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_rotextern" name="mano_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_abdu" name="mano_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_adu" name="mano_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_desvrad" name="mano_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="mano_desvcubi" name="mano_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Cadera</th>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_flex" name="cadera_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_exten" name="cadera_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_rotintern" name="cadera_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_rotextern" name="cadera_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_abdu" name="cadera_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_adu" name="cadera_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_desvrad" name="cadera_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="cadera_desvcubi" name="cadera_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Rodilla</th>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_flex" name="rodilla_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_exten" name="rodilla_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_rotintern" name="rodilla_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_rotextern" name="rodilla_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_abdu" name="rodilla_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_adu" name="rodilla_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_desvrad" name="rodilla_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="rodilla_desvcubi" name="rodilla_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Tobillo</th>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_flex" name="tobillo_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_exten" name="tobillo_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_rotintern" name="tobillo_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_rotextern" name="tobillo_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_abdu" name="tobillo_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_adu" name="tobillo_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_desvrad" name="tobillo_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="tobillo_desvcubi" name="tobillo_desvcubi" value="">
              </div>
            </td>
          </tr>
          <tr>
            <th>Pie</th>
            <td>
              <div class="input-field">
                <input type="text" id="pie_flex" name="pie_flex" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_exten" name="pie_exten" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_rotintern" name="pie_rotintern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_rotextern" name="pie_rotextern" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_abdu" name="pie_abdu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_adu" name="pie_adu" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_desvrad" name="pie_desvrad" value="">
              </div>
            </td>
            <td>
              <div class="input-field">
                <input type="text" id="pie_desvcubi" name="pie_desvcubi" value="">
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
              <textarea id="ta_olfatorio" name="ta_olfatorio" class="materialize-textarea"></textarea>
              <label for="ta_olfatorio">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>II</td>
            <td>Óptico</td>
            <td>
              <textarea id="ta_optico" name="ta_optico" class="materialize-textarea"></textarea>
              <label for="ta_optico">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>III</td>
            <td>Motor ocular común</td>
            <td>
              <textarea id="ta_mot_ocular_com" name="ta_mot_ocular_com" class="materialize-textarea"></textarea>
              <label for="ta_mot_ocular_com">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>IV</td>
            <td>Patético o troclear</td>
            <td>
              <textarea id="ta_patetico" name="ta_patetico" class="materialize-textarea"></textarea>
              <label for="ta_patetico">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>V</td>
            <td>Trigémino</td>
            <td>
              <textarea id="ta_trige" name="ta_trige" class="materialize-textarea"></textarea>
              <label for="ta_trige">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>VI</td>
            <td>Motor ocular externo</td>
            <td>
              <textarea id="ta_mot_ocular_ext" name="ta_mot_ocular_ext" class="materialize-textarea"></textarea>
              <label for="ta_mot_ocular_ext">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>VII</td>
            <td>Facial</td>
            <td>
              <textarea id="ta_facial" name="ta_facial" class="materialize-textarea"></textarea>
              <label for="ta_facial">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>VIII</td>
            <td>Auditivo</td>
            <td>
              <textarea id="ta_auditivo" name="ta_auditivo" class="materialize-textarea"></textarea>
              <label for="ta_auditivo">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>IX</td>
            <td>Glosofaríngeo</td>
            <td>
              <textarea id="ta_gloso" name="ta_gloso" class="materialize-textarea"></textarea>
              <label for="ta_gloso">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>X</td>
            <td>Vago</td>
            <td>
              <textarea id="ta_vago" name="ta_vago" class="materialize-textarea"></textarea>
              <label for="ta_vago">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>XI</td>
            <td>Espinal</td>
            <td>
              <textarea id="ta_espinal" name="ta_espinal" class="materialize-textarea"></textarea>
              <label for="ta_espinal">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>XII</td>
            <td>Hipogloso</td>
            <td>
              <textarea id="ta_hipogloso" name="ta_hipogloso" class="materialize-textarea"></textarea>
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

  {{-- Escala de ashwoth --}}
  <form class="" id="escala_ashworth" action="" method="">
    <div class="row">
      <h5 style="font-weight:bold;">Escala de ashworth</h5>
      <p class="range-field">
        <input type="range" id="escalaAsh" name="escalaAsh" min="0" max="4" />
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

  {{-- Reflejos Osteotendinosos --}}
  <form class="" id="reflejos_osteo" action="" method="">
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
              <textarea id="ta_maseterino" name="ta_maseterino" class="materialize-textarea"></textarea>
              <label for="ta_maseterino">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>C5 y C6</td>
            <td>Musculocutáneo</td>
            <td>Bicipital</td>
            <td>
              <textarea id="ta_bicipital" name="ta_bicipital" class="materialize-textarea"></textarea>
              <label for="ta_bicipital">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>C5 y C6</td>
            <td>Radial</td>
            <td>Estilorradical</td>
            <td>
              <textarea id="ta_estilo" name="ta_estilo" class="materialize-textarea"></textarea>
              <label for="ta_estilo">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>C6, C7 y C8</td>
            <td>Radial</td>
            <td>Tricipital</td>
            <td>
              <textarea id="ta_tricipital" name="ta_tricipital" class="materialize-textarea"></textarea>
              <label for="ta_tricipital">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>L2, L3 y L4</td>
            <td>Crural</td>
            <td>Rotuliano</td>
            <td>
              <textarea id="ta_rotul" name="ta_rotul" class="materialize-textarea"></textarea>
              <label for="ta_rotul">Escribe aquí</label>
            </td>
          </tr>
          <tr>
            <td>L5, S1 y S2</td>
            <td>Tibial</td>
            <td>Aquíleo</td>
            <td>
              <textarea id="ta_aquileo" name="ta_aquileo" class="materialize-textarea"></textarea>
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

  {{-- Tipo de marcha --}}
  <form class="" id="tipo_marcha" action="" method="">
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
                <input type="checkbox" name="hemi" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Cerebelosa/Atáxica</td>
            <td>
              <label>
                <input type="checkbox" name="cerebelosa" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Paraparética</td>
            <td>
              <label>
                <input type="checkbox" name="paraparetica" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Hipocinética/Parkinsoniana</td>
            <td>
              <label>
                <input type="checkbox" name="hipo" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Vestibular</td>
            <td>
              <label>
                <input type="checkbox" name="vesti" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Marcha de las correas</td>
            <td>
              <label>
                <input type="checkbox" name="correas" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Marcha de la ataxia sensorial</td>
            <td>
              <label>
                <input type="checkbox" name="ataxia" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Marcha de las miopatías</td>
            <td>
              <label>
                <input type="checkbox" name="miopatias" class="filled-in"/>
                <span>Si</span>
              </label>
            </td>
          </tr>
          <tr>
            <td>Marcha histerica</td>
            <td>
              <label>
                <input type="checkbox" name="histerica" class="filled-in"/>
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

  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

<map name="image-map">
    <area alt="1" title="1" name="mpd-1" id="mpd-1" value="0" href="" coords="485,120,483,80,493,33,520,32,548,30,595,48,601,102,580,60,535,63,498,70,492,88,493,108" shape="poly">
    <area alt="2" title="2" name="mpd-2" id="mpd-2" href="" coords="483,133,507,195,548,206,586,190,601,141,590,90,581,55,497,65" shape="poly">
    <area alt="3" title="3" name="mpd-3" id="mpd-3" href="" coords="497,211,525,281,460,265" shape="poly">
    <area alt="4" title="4" name="mpd-4" id="mpd-4" href="" coords="586,211,558,280,631,258" shape="poly">
    <area alt="5" title="5" name="mpd-5" id="mpd-5" href="" coords="546,399,556,313,620,270,553,282,583,201,540,212,503,198,528,283,470,275,528,308" shape="poly">
    <area alt="6" title="6" name="mpd-6" id="mpd-6" href="" coords="462,280,395,270,348,298,335,353,343,391,390,364" shape="poly">
    <area alt="7" title="7" name="mpd-7" id="mpd-7" href="" coords="388,371,335,398,317,453,319,519,342,516,372,503,405,446,413,393" shape="poly">
    <area alt="8" title="8" name="mpd-8" id="mpd-8" href="" coords="322,523,307,489,280,521,220,664,255,684,294,637,325,598,365,564,373,508,347,518" shape="poly">
    <area alt="9" title="9" name="mpd-9" id="mpd-9"  href="" coords="215,666,205,689,144,741,169,741,151,789,172,771,166,804,189,781,209,774,217,791,230,761,237,722,252,686" shape="poly">
    <area alt="10" title="10" name="mpd-10" id="mpd-10" href="" coords="621,276,656,306,689,358,744,383,746,335,731,283,676,266" shape="poly">
    <area alt="11" title="11" name="mpd-11" id="mpd-11" href="" coords="693,363,680,393,691,474,718,501,766,521,778,473,753,391" shape="poly">
    <area alt="12" title="12" name="mpd-12" id="mpd-12" href="" coords="764,518,718,504,726,556,839,677,866,654,854,619,831,564,806,513,784,479" shape="poly">
    <area alt="13" title="13" name="mpd-13" id="mpd-13" href="" coords="836,682,844,716,879,797,879,767,906,807,901,767,926,806,916,766,939,792,921,741,947,731,891,691,866,656" shape="poly">
    <area alt="14" title="14" name="mpd-14" id="mpd-14" href="" coords="395,369,435,401,470,408,515,403,538,391,531,355,526,320,505,296,468,283,437,298" shape="poly">
    <area alt="15" title="15" name="mpd-15" id="mpd-15" href="" coords="546,396,606,404,645,398,689,373,676,341,650,303,630,283,595,285,556,308" shape="poly">
    <area alt="16" title="16" name="mpd-16" id="mpd-16" href="" coords="413,396,410,436,423,468,427,506,423,629,493,694,468,578,462,416,435,404" shape="poly">
    <area alt="17" title="17" name="mpd-17" id="mpd-17" href="" coords="617,414,678,393,678,438,663,478,663,544,672,598,672,627,648,642,627,671,583,706,616,551" shape="poly">
    <area alt="18" title="18" name="mpd-18" id="mpd-18" href="" coords="470,416,535,404,535,463,498,478,470,471" shape="poly">
    <area alt="19" title="19" name="mpd-19" id="mpd-19" href="" coords="546,403,610,411,610,473,566,474,543,466" shape="poly">
    <area alt="20" title="20" name="mpd-20" id="mpd-20" href="" coords="468,479,540,479,540,534,468,533" shape="poly">
    <area alt="21" title="21" name="mpd-21" id="mpd-21" href="" coords="545,474,611,473,610,536,548,534" shape="poly">
    <area alt="22" title="22" name="mpd-22" id="mpd-22" href="" coords="472,543,540,538,540,598,508,589,473,579" shape="poly">
    <area alt="23" title="23" name="mpd-23" id="mpd-23" href="" coords="543,543,611,540,603,586,576,588,543,596" shape="poly">
    <area alt="24" title="24" name="mpd-24" id="mpd-24" href="" coords="478,583,498,701,516,729,540,737,536,596" shape="poly">
    <area alt="25" title="25" name="mpd-25" id="mpd-25" href="" coords="545,598,603,586,596,639,581,706,566,734,546,741" shape="poly">
    <area alt="26" title="26" name="mpd-26" id="mpd-26" href="" coords="425,637,388,769,405,764,441,714,443,651" shape="poly">
    <area alt="27" title="27" name="mpd-27" id="mpd-27" href="" coords="440,649,438,699,498,949,513,930,518,889,530,827,530,739" shape="poly">
    <area alt="28" title="28" name="mpd-28" id="mpd-28" href="" coords="440,713,402,771,407,839,423,892,443,947,460,966,468,901,480,861" shape="poly">
    <area alt="29" title="29" name="mpd-29" id="mpd-29" href="" coords="395,767,378,879,423,967,442,945,408,864" shape="poly">
    <area alt="30" title="30" name="mpd-30" id="mpd-30" href="" coords="477,872,462,965,487,989,495,942" shape="poly">
    <area alt="31" title="31" name="mpd-31" id="mpd-31" href="" coords="440,949,423,980,438,994,482,992" shape="poly">
    <area alt="32" title="32" name="mpd-32" id="mpd-32" href="" coords="407,952,397,1037,418,1020,417,975" shape="poly">
    <area alt="33" title="33" name="mpd-33" id="mpd-33" href="" coords="423,1010,438,1042,478,1055,490,1030,492,994" shape="poly">
    <area alt="34" title="34" name="mpd-34" id="mpd-34" href="" coords="423,1025,400,1047,397,1107,400,1178,412,1240,428,1285,433,1192,440,1150,458,1102,478,1060" shape="poly">
    <area alt="35" title="35" name="mpd-35" id="mpd-35" href="" coords="473,1072,445,1152,432,1227,433,1280,453,1220,478,1137" shape="poly">
    <area alt="36" title="36" name="mpd-36" id="mpd-36" href="" coords="390,1103,372,1170,385,1240,397,1320,348,1433,418,1446,443,1365,430,1313,399,1220" shape="poly">
    <area alt="37" title="37" name="mpd-37" id="mpd-37" href="" coords="648,649,653,702,628,787,596,954,571,880,565,814,560,751" shape="poly">
    <area alt="38" title="38" name="mpd-38" id="mpd-38" href="" coords="670,629,704,759,685,751,656,712,650,649" shape="poly">
    <area alt="39" title="39" name="mpd-39" id="mpd-39" href="" coords="650,707,615,849,636,959,650,944,675,895,688,822,685,752" shape="poly">
    <area alt="40" title="40" name="mpd-40" id="mpd-40" href="" coords="613,869,598,990,631,967" shape="poly">
    <area alt="41" title="41" name="mpd-41" id="mpd-41" href="" coords="688,752,708,772,711,822,711,877,698,922,683,942,670,962,653,944,686,852" shape="poly">
    <area alt="42" title="42" name="mpd-42" id="mpd-42" href="" coords="648,954,625,972,596,994,616,1047,648,1047,673,1017,699,1039,698,999,694,939,670,959" shape="poly">
    <area alt="43" title="43" name="mpd-43" id="mpd-43" href="" coords="621,1057,648,1118,670,1205,673,1300,686,1273,691,1233,694,1192,701,1113,699,1049,673,1022,651,1047" shape="poly">
    <area alt="44" title="44" name="mpd-44" id="mpd-44" href="" coords="621,1065,621,1132,646,1222,665,1288,671,1237,653,1150" shape="poly">
    <area alt="45" title="45" name="mpd-45" id="mpd-45" href="" coords="708,1097,724,1158,718,1243,704,1305,723,1356,754,1416,748,1433,711,1440,680,1436,670,1396,655,1366,668,1308,685,1277,693,1217" shape="poly">
    <area alt="46" title="46" name="mpd-46" id="mpd-46" href="" coords="1463,3,1416,23,1401,102,1408,125,1435,156,1463,161,1495,153,1518,123,1526,85,1526,52,1506,17" shape="poly">
    <area alt="47" title="47" name="mpd-47" id="mpd-47" href="" coords="1446,160,1385,221,1466,200,1463,165" shape="poly">
    <area alt="48" title="48" name="mpd-48" id="mpd-48" href="" coords="1466,166,1500,158,1536,220,1468,198" shape="poly">
    <area alt="49" title="49" name="mpd-49" id="mpd-49" href="" coords="1371,230,1395,265,1408,351,1463,453,1480,438,1526,353,1531,303,1551,246,1554,223,1498,211,1458,203" shape="poly">
    <area alt="50" title="50" name="mpd-50" id="mpd-50" href="" coords="1371,226,1308,233,1267,259,1253,286,1248,321,1250,348,1313,323,1318,289,1340,279,1381,246" shape="poly">
    <area alt="51" title="51" name="mpd-51" id="mpd-51" href="" coords="1307,321,1253,353,1238,389,1218,448,1230,498,1242,436,1255,424,1262,436,1255,469,1250,489,1270,494,1288,479,1302,454,1323,414,1323,363" shape="poly">
    <area alt="52" title="52" name="mpd-52" id="mpd-52" href="" coords="1217,476,1165,568,1124,693,1170,706,1205,644,1255,561,1273,501,1252,491,1260,438,1250,424,1237,479,1230,496" shape="poly">
    <area alt="53" title="53" name="mpd-53" id="mpd-53" href="" coords="1124,692,1067,762,1100,736,1074,802,1110,752,1094,816,1124,767,1120,824,1155,754,1184,786,1172,702" shape="poly">
    <area alt="54" title="54" name="mpd-54" id="mpd-54" href="" coords="1556,235,1573,221,1606,225,1644,238,1668,258,1678,295,1683,323,1683,348,1624,318,1614,286,1569,260" shape="poly">
    <area alt="55" title="55" name="mpd-55" id="mpd-55" href="" coords="1624,325,1676,345,1694,385,1714,435,1716,467,1706,492,1694,460,1683,425,1671,428,1678,451,1681,475,1676,488,1659,488,1634,460,1613,421,1613,366" shape="poly">
    <area alt="56" title="56" name="mpd-56" id="mpd-56" href="" coords="1664,496,1678,551,1711,603,1766,692,1809,677,1794,626,1774,574,1756,524,1719,471,1703,489,1693,471,1686,426,1673,423,1679,453,1679,488" shape="poly">
    <area alt="57" title="57" name="mpd-57" id="mpd-57" href="" coords="1764,691,1752,776,1779,742,1816,807,1807,751,1847,809,1829,746,1861,781,1837,731,1874,751,1846,714,1811,679" shape="poly">
    <area alt="58" title="58" name="mpd-58" id="mpd-58" href="" coords="1383,246,1320,291,1312,326,1323,360,1342,369,1367,363,1406,348,1401,286" shape="poly">
    <area alt="59" title="59" name="mpd-59" id="mpd-59" href="" coords="1553,246,1581,270,1616,291,1624,318,1609,358,1584,368,1551,356,1528,348,1535,281" shape="poly">
    <area alt="60" title="60" name="mpd-60" id="mpd-60" href="" coords="1323,370,1327,425,1347,506,1370,530,1385,563,1390,593,1400,576,1410,550,1413,508,1430,478,1460,458,1436,415,1420,386,1401,355,1360,373" shape="poly">
    <area alt="61" title="61" name="mpd-61" id="mpd-61" href="" coords="1530,355,1573,366,1613,361,1611,393,1609,431,1603,463,1588,499,1574,514,1559,536,1551,561,1544,583,1523,546,1511,484,1488,459,1470,449" shape="poly">
    <area alt="62" title="62" name="mpd-62" id="mpd-62" href="" coords="1393,591,1413,549,1423,491,1465,456,1498,473,1520,511,1525,553,1544,588,1518,601,1481,626,1471,647,1436,609" shape="poly">
    <area alt="63" title="63" name="mpd-63" id="mpd-63" href="" coords="1352,514,1371,533,1383,561,1390,593,1363,594,1348,599" shape="poly">
    <area alt="64" title="64" name="mpd-64" id="mpd-64" href="" coords="1584,506,1589,536,1593,599,1564,593,1546,574" shape="poly">
    <area alt="65" title="65" name="mpd-65" id="mpd-65" href="" coords="1390,596,1368,624,1345,674,1327,712,1322,694,1338,634,1345,601" shape="poly">
    <area alt="66" title="66" name="mpd-66" id="mpd-66" href="" coords="1544,591,1594,601,1618,704,1596,682,1581,637" shape="poly">
    <area alt="67" title="67" name="mpd-67" id="mpd-67" href="" coords="1395,599,1355,652,1328,714,1337,759,1362,782,1418,792,1455,789,1470,714,1466,647,1435,611" shape="poly">
    <area alt="68" title="68" name="mpd-68" id="mpd-68" href="" coords="1473,646,1468,722,1488,784,1543,787,1589,776,1611,734,1608,697,1583,646,1540,594,1498,612" shape="poly">
    <area alt="69" title="69" name="mpd-69" id="mpd-69" href="" coords="1323,710,1308,784,1307,855,1313,923,1307,1007,1352,970,1365,910,1371,860,1395,795,1343,772" shape="poly">
    <area alt="70" title="70" name="mpd-70" id="mpd-70" href="" coords="1398,801,1421,934,1406,1010,1378,1075,1350,1027,1348,977,1368,925,1375,857" shape="poly">
    <area alt="71" title="71" name="mpd-71" id="mpd-71" href="" coords="1398,802,1418,930,1453,855,1458,787" shape="poly">
    <area alt="72" title="72" name="mpd-72" id="mpd-72" href="" coords="1323,999,1345,1029,1345,977" shape="poly">
    <area alt="73" title="73" name="mpd-73" id="mpd-73" href="" coords="1320,1004,1300,1027,1295,1054,1283,1092,1267,1125,1262,1177,1268,1212,1310,1177,1328,1098,1345,1035" shape="poly">
    <area alt="74" title="74" name="mpd-74" id="mpd-74" href="" coords="1350,1027,1376,1069,1373,1112,1370,1173,1352,1222,1310,1177" shape="poly">
    <area alt="75" title="75" name="mpd-75" id="mpd-75" href="" coords="1307,1177,1263,1213,1257,1320,1255,1396,1265,1433,1278,1436,1305,1433,1315,1405,1328,1365,1308,1333,1318,1293,1350,1222" shape="poly">
    <area alt="76" title="76" name="mpd-76" id="mpd-76" href="" coords="1544,791,1485,787,1485,831,1505,899,1518,937" shape="poly">
    <area alt="77" title="77" name="mpd-77" id="mpd-77" href="" coords="1548,806,1521,935,1533,1002,1564,1072,1591,1024,1594,969,1579,939" shape="poly">
    <area alt="78" title="78" name="mpd-78" id="mpd-78" href="" coords="1546,792,1579,947,1606,989,1636,1004,1631,947,1633,872,1634,806,1619,712,1609,744,1598,771,1569,782" shape="poly">
    <area alt="79" title="79" name="mpd-79" id="mpd-79" href="" coords="1593,1025,1603,1060,1619,1092,1634,1173,1598,1218,1576,1170,1568,1074" shape="poly">
    <area alt="80" title="80" name="mpd-80" id="mpd-80" href="" coords="1603,997,1636,1002,1646,1059,1671,1113,1678,1165,1681,1203,1636,1178,1598,1037" shape="poly">
    <area alt="81" title="81" name="mpd-81" id="mpd-81" href="" coords="1598,1222,1639,1348,1621,1360,1631,1410,1656,1431,1679,1428,1689,1398,1688,1343,1686,1263,1674,1205,1638,1178" shape="poly">
</map>



@endsection

@section('scripts')
  <script src="{{{ asset('js/registro.js') }}}"></script>
@endsection

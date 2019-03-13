@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/medico/home.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Medico')

@section('content')
  <div class="center-elements">
    <div class="row container
    section">
      <div class="col s12">
        Bienvenido al Sistema de Control de Consultas de la Facultad de Fisioterapia de la Universidad Marista
      </div>
    </div>
    <div class="row section container">
      <div class="col s12">
        <img class="responsive-img" src="{{{ asset('img/logos/logo_1_a.png') }}}" alt="">
      </div>
    </div>
  </div>



@endsection

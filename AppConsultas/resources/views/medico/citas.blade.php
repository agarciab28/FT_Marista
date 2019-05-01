@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/ver.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Identificacion')

@section('content')

<div class="row">

</div>
<div class="container">
  <div class="row">

    <ul id="dropdown2" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li><a href="#!">three</a></li>
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li><a href="#!">three</a></li>
    </ul>

    <nav class="nav-extended" >
      <div class="nav-wrapper" id="nw_1">
        <a href="#" class="brand-logo center" id="txtc">Control de citas</a>
      </div>
      <div class="nav-content" id="nw_2">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a href="#test1">Historia clínica</a></li>
          <li class="tab"><a href="#test2">Notas de evolución</a></li>
          <li class="tab"><a href="#test4">Notas de evaluación</a></li>
          <li><a class="dropdown-trigger tab" href="#!" data-target="dropdown2">Aditivos al historial<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
        </ul>
      </div>
    </nav>


  </div>

</div>



@endsection

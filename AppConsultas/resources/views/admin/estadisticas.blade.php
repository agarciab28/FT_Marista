@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/estadisticas.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Estadisticas')

@section('content')
  <div class="row section container">
    <div class="contenedor col s6 push-s3">
      <h3>Edades</h3>
    </div>
  </div>
  <canvas id="chart1" width="400" height="200"></canvas>
  <div class="row section container">
    <div class="contenedor col s6 push-s3">
      <h3>Genero</h3>
    </div>
  </div>
  <canvas id="chart2" width="400" height="200"></canvas>
  <div class="row section container">
    <div class="contenedor col s6 push-s3">
      <h3>Sintomas Generales</h3>
    </div>
  </div>
  <canvas id="chart3" width="400" height="200"></canvas>
  <div class="row section container">
    <div class="contenedor col s6 push-s3">
      <h3>Aparatos y Sistemas</h3>
    </div>
  </div>
  <canvas id="chart4" width="400" height="200"></canvas>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
  <script type="text/javascript" src="{{{ asset('js/estadisticas/test.js') }}}"></script>
@endsection

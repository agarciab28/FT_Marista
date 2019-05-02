@extends('layouts.app_medico')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">


  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/medico/buscar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Buscar Paciente')

@section('content')
  {{--  <div class="section container">
    <div class="row">
      <div class="input-field col s10 m4 push-m4">
        <input id="buscador" type="text">
        <label for="buscador"><i class="fas fa-search" style="margin-right:0.5em;"></i>Buscar</label>
      </div>
      {{-- <button class="btn waves-effect waves-light" type="submit" name="action"><i class="fas fa-search"></button> --}}
      {{--</div>
  </div>--}}

    <div class="section container">
      <table id="example1" class="responsive-table striped" style="width:100%">
     <thead>
       <tr>
           <th>Apellidos</th>
           <th>Nombre</th>
           <th>CURP</th>
           <th>Historial</th>
           <th>Identificación</th>
           <th>Citas</th>
       </tr>
     </thead>
     <tbody>
       @if($paciente->count())
         @foreach($paciente as $usuario)
           <tr>
             <td>{{$usuario->apellidoP}} {{$usuario->apellidoM}}</td>
             <td>{{$usuario->nombre}}</td>
             <td>{{$usuario->curp}}</td>
             <td> <a href="{{ route('med_reg',[$usuario->id_ficha]) }}" class="waves-effect waves-light btn">Registrar</a></td>
             <td> <a href="{{ route('datos_ficha_med',[$usuario->curp]) }}" class="waves-effect waves-light btn">Ver Identificacion</a></td>
             <td> <a href="{{ route('med_bc',[$usuario->id_ficha]) }}" class="waves-effect waves-light btn">Agregar cita</a></td>
           </tr>



         @endforeach
         @else
           <tr>
             <td colspan="8">No hay registro !!</td>
           </tr>
         @endif

     </tbody>
   </table>
    </div>
@endsection

@section('scripts')
  <script src="{{{ asset('js/datatables.js') }}}"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@endsection

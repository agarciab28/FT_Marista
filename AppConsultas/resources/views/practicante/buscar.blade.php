@extends('layouts.app_practicante')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/practicante/buscar.css') }}}" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">
@endsection

@section('title', 'Buscar Paciente')

@section('content')
  <div class="section container">
    <div class="row">
      <div class="input-field col s10 m4 push-m4">
        <input id="buscador" type="text">
        <label for="buscador"><i class="fas fa-search" style="margin-right:0.5em;"></i>Buscar</label>
      </div>
      {{-- <button class="btn waves-effect waves-light" type="submit" name="action"><i class="fas fa-search"></button> --}}
    </div>
  </div>
  <div class="section container">
    <table class="striped responsive-table">
   <thead>
     <tr>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>CURP</th>
         <th>Estado</th>
         <th>Acciones</th>
     </tr>
   </thead>
   <tbody>
   
   @if($paciente->count())
           @foreach($paciente as $usuario)
             <tr>

               <td>{{$usuario->apellidoP}}  {{$usuario->apellidoM}}</td>
               <td>{{$usuario->nombre}}</td>

               <td>{{$usuario->curp}}</td>
                <td> <a href="/practicante/buscar/ver" class="waves-effect waves-light btn">Ver Identificacion</a></td>
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

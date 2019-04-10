@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/medico/buscar.css') }}}" rel="stylesheet">
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

             <td>{{$usuario->apellidoP}}</td>
             <td>{{$usuario->nombre}}</td>

             <td>{{$usuario->curp}}</td>
              <td> <a href="/medico/buscar/ver" class="waves-effect waves-light btn">Ver Identificacion</a></td>
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

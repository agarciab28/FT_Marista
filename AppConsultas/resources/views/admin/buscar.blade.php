@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/buscar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Buscar Paciente')

@section('content')
    <form class="section" action="" method="">
      <div class="row">
        <div class="input-field col s10 m4 push-m4">
          <input id="buscador" type="text">
          <label for="buscador"><i class="fas fa-search" style="margin-right:0.5em;"></i>Buscar</label>
        </div>
        {{-- <button class="btn waves-effect waves-light" type="submit" name="action"><i class="fas fa-search"></button>
      </div> --}}
    </form>

    <div class="row">
      <div class="col s12">
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
         <tr>
           <td>Alejandro</td>
           <td>García</td>
           <td>GABAasedfr12345678</td>
           <td>Rehabilitacion</td>
           <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
         </tr>
         <tr>
           <td>Alejandro</td>
           <td>García</td>
           <td>GABAasedfr12345678</td>
           <td>Rehabilitacion</td>
           <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
         </tr>
         <tr>
           <td>Alejandro</td>
           <td>García</td>
           <td>GABAasedfr12345678</td>
           <td>Rehabilitacion</td>
           <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
         </tr>
         <tr>
           <td>Alejandro</td>
           <td>García</td>
           <td>GABAasedfr12345678</td>
           <td>Rehabilitacion</td>
           <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
         </tr>
         <tr>
           <td>Alejandro</td>
           <td>García</td>
           <td>GABAasedfr12345678</td>
           <td>Rehabilitacion</td>
           <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
         </tr>
       </tbody>
     </table>


@endsection

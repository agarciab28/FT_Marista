@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/ver.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Identificacion')

@section('content')
<div class="section container">
  @if($user->count())
      @foreach($user as $usuario)
    <div class="row">
      <div class="contenedor col s12 m6 push-m3">
      {{ csrf_field() }}
        <h4>Ficha de Identificación</h4>
      </div>
    </div>
    <form class="form_1" action="" method="">
      <div class="row">
        <div class="input-field col s12 m4">
          <input id="nombre" type="text" class="validate" disabled value="{{$usuario->nombre}}">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="apellido" type="text" class="validate" disabled value="{{$usuario->apellidoP}}">
          <label for="apellido">Apellido</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="edad" type="number" class="validate" disabled value="{{$usuario->edad}}">
          <label for="edad">Edad</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="genero" type="text" class="validate" disabled value="{{$usuario->sexo}}">
          <label for="genero">Genero</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="nacionalidad" type="text" class="validate" disabled value="{{$usuario->nacionalidad}}">
          <label for="nacionalidad">Nacionalidad</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="estado" type="text" class="validate" disabled value="{{$usuario->estadoCivil}}">
          <label for="estado">Estado Civil</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="ocupacion" type="text" class="validate" disabled value="{{$usuario->ocupacion}}">
          <label for="ocupacion">Ocupación</label>
        </div>
        <div class="input-field col s12 m8">
          <input id="calle" type="text" class="validate" disabled value="{{$usuario->calle}}">
          <label for="calle">Calle</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="numero" type="text" class="validate" disabled value="{{$usuario->num_ext}}">
          <label for="numero">Numero</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="colonia" type="text" class="validate" disabled value="{{$usuario->colonia}}">
          <label for="colonia">Colonia</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="tel1" type="tel" class="validate" disabled value="{{$usuario->telTrabajo}}">
          <label for="tel1">Telefono</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="celular" type="tel" class="validate" disabled value="{{$usuario->celular}}">
          <label for="celular">Celular</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="religion" type="text" class="validate" disabled value="{{$usuario->religion}}">
          <label for="religion">Religion</label>
        </div>
        <div class="input-field col s12 m8">
          <input id="nombre2" type="text" class="validate" disabled value="{{$usuario->familiaAC}}">
          <label for="nombre2">Persona en caso de emergencia</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="tel2" type="tel" class="validate" disabled value="{{$usuario->celAC}}">
          <label for="tel2">Telefono/Celular</label>
        </div>
      </div>
    </form>
  </div>
  @endforeach
  @endif

  <div class="row section container">
    <div class="contenedor col s12 m6 push-m3">
      <h4>Historial de Consultas</h4>
    </div>
  </div>

  <table class="striped responsive-table ">
    <thead>
   <tr>
       <th>Fecha</th>
       <th>Nombre</th>
       <th>Acciones</th>
   </tr>
 </thead>
 <tbody>
  
   <tr>
     <td>13/03/2019</td>
     <td>Alejandro</td>
     <td> <a href="" class="waves-effect waves-light btn">Ver Detalles</a></td>
   </tr>
 </tbody>
</table>

@endsection

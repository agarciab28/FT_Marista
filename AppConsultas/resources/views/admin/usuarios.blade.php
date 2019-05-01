@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Usuarios')

@section('content')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>
  <div class="section container">
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <h5>Usuarios registrados</h5>
      </div>
    </div>
  </div>

  <div class="section container">
    <table class="striped responsive-table">
      <thead>
        <tr>
        <th>Apellido</th>
          <th>Nombre</th>
          <th>Tipo de Usuario</th>
          <th>CURP</th>
          <th>Acciones</th>
        </tr>
      </thead>

      <tbody>
        @if($usuario->count())
          @foreach($usuario as $usuario)
            <tr>
            <td>{{$usuario->id}} </td>   
              <td>{{$usuario->apellidoP}} {{$usuario->apellidoM}}</td>
              <td>{{$usuario->nombre}}</td>
              <td>{{$usuario->tipoDeUsuario}}</td>
              <td>{{$usuario->curp}}</td>
              <td>
              
                <a href="{{ route('modificar_usuario',[$usuario->id]) }}" class="waves-effect waves-light btn">Modificar</a>
                <a href="{{ route('deleteuser',[$usuario->id]) }}" class="waves-effect waves-light btn">Eliminar</a>
              </td>
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

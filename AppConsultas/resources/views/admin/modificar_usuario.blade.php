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
    <form class="col  s12 m12" id="form_mod_carrera" action="{{route('modifica_usuario_metodo')}}" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="col m4 push-m4 s12">
          <h4>Modificar Usuario</h4>
        </div>
      </div>
      <div class="row">
        @if($usuario->count())
          @foreach($usuario as $usuario)



          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" name="nombre" id="nombre_mod" class="validate" value=" {{$usuario->nombre}}" required maxlength="35">
            <label for="nombre_mod"> Nombre </label>
          </div>
          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" name="apellidoP" id="apellidoP_mod" class="validate" value=" {{$usuario->apellidoP}}" required maxlength="35">
            <label for="apellidoP_mod">Apellido Paterno</label>
          </div>
          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" name="apellidoM" id="apellidoM_mod" class="validate" value=" {{$usuario->apellidoM}}" required maxlength="35">
            <label for="apellidoM_mod">Apellido Materno</label>
          </div>
          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" name="correoElectronico" id="correo_mod" class="validate" value=" {{$usuario->correoElectronico}}" required maxlength="90">
            <label for="correo_mod">Correo electrónico</label>
          </div>
          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" id="usuario_mod" name="nombreDeUsuario" class="validate" value=" {{$usuario->nombreDeUsuario}}" required maxlength="35">
            <label for="usuario_mod">Nombre de usuario</label>
          </div>

          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="password" id="pass_mod" name="password" class="validate"  required maxlength="100">
            <label for="pass_mod">Nueva contraseña</label>
          </div>

          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" id="cedulaprof_mod" name="cedulaProfesional" class="validate" value=" {{$usuario->cedulaProfesional}}" required maxlength="35">
            <label for="cedulaprof_mod">Cédula profesional</label>
          </div>

          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" id="cedulaesp_mod" name="cedulaMoE" class="validate" value=" {{$usuario->cedulaMoE}}" required maxlength="35">
            <label for="cedulaesp_mod">Cédula especial o maestría</label>
          </div>

          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" id="numtel_mod" name="telefono" class="validate" value=" {{$usuario->telefono}}" required maxlength="35">
            <label for="numtel_mod">Número de teléfono</label>
          </div>

          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">account_circle</i>-->
            <input type="text" id="curp_mod" name="curp" class="validate" value=" {{$usuario->curp}}" required maxlength="35">
            <label for="curp_mod">CURP</label>
          </div>

          @endforeach
          @else
            <tr>
              <td colspan="8">No hay registro !!</td>
            </tr>
          @endif



        <div class="row">
        </div>
        <div class="input-field col m5 s12">
          <button class="btn light-blue darken-4" type="submit" id="mod_registrar_carrera">Modificar usuario
            <i class="material-icons right">send </i>
          </button>
        </div>
      </div>
    </form>

  </div>



@endsection

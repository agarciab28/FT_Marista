@extends('layouts.app_medico')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/medico/registrar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Registrar Paciente Fica identificación')

@section('content')

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif


<div class="container">
  {{-- Ficha de identificacion --}}
<form class="" id="ficha_id" action="{{ route('store_ficha_id') }}" method="POST">
    {{ csrf_field() }}

    @if(session('success'))
        <script type="text/javascript">
          alert(
            '{{session('success')}}'
          );
        </script>
    @endif
  <div class="row">
    <h5 style="font-weight:bold;">Ficha de Identificacion</h5>
    <div class="input-field col s12 m4">
      <input id="nombre" name="nombre" type="text" class="validate" required>
      <label for="nombre">Nombre</label>
      {!! $errors->first('nombre', '<span id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}
    </div>
    <div class="input-field col s12 m4">
      <input id="apellido_p" name="apellido_p" type="text" class="validate"  required>
      <label for="apellido_p">Apellido Paterno</label>
      {!! $errors->first('apellidoP', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m4">
      <input id="apellido_m" type="text" class="validate" name="apellido_m"  required>
      <label for="apellido_m">Apellido Materno</label>
      {!! $errors->first('apellido_m', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m3">
      <input id="edad" name="edad" type="number" class="validate" required>
      <label for="edad">Edad</label>
      {!! $errors->first('edad', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}
    </div>

    <div class="input-field col s12 m3">
      <select name="sex" id="sex" required>
        <option value="" disabled selected>Elige una opcion</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
      </select>
      <label>Genero</label>
      {!! $errors->first('sex', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>

    <div class="input-field col s12 m3">
      <input id="nacionalidad" name="nacionalidad" type="text" class="validate" required>
      <label for="nacionalidad">Nacionalidad</label>
      {!! $errors->first('nacionalidad', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m3">
      <select name="est_civ" id="est_civ" required>
        <option value="" disabled selected>Elige una opcion</option>
        <option value="S">Soltero</option>
        <option value="C">Casado</option>
      </select>
      <label>Estado Civil</label>
      {!! $errors->first('est_civ', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m3">
      <input id="ocupacion" name="ocupacion" type="text" class="validate" required>
      <label for="ocupacion">Ocupación</label>
      {!! $errors->first('ocupacion', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m3">
      <input id="calle" type="text" name="calle" class="validate" required>
      <label for="calle">Calle</label>
      {!! $errors->first('calle', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m3">
      <input id="numero_int" type="text" class="validate" name="numero_int" required>
      <label for="numero_int">Numero interior</label>
      {!! $errors->first('numero_int', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m3">
      <input id="numero_ext" type="text" class="validate" name="numero_ext" required>
      <label for="numero_ext">Numero exterior</label>
      {!! $errors->first('numero_ext', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>

    <div class="input-field col s12 m4">
      <input id="colonia" type="text" class="validate" name="colonia" required>
      <label for="colonia">Colonia</label>
      {!! $errors->first('colonia', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m4">
      <input id="ciudad" type="text" class="validate" name="ciudad" required>
      <label for="ciudad">Ciudad</label>
      {!! $errors->first('ciudad', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>

    <div class="input-field col s12 m4">
      <input id="estado" type="text" class="validate" name="estado" required>
      <label for="estado">Estado</label>
      {!! $errors->first('estado', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m4">
      <input id="tel1" type="tel" class="validate" name="tel1" required>
      <label for="tel1">Telefono</label>
    </div>
    <div class="input-field col s12 m4">
      <input id="celular" type="tel" name="celular" class="validate" required>
      <label for="celular">Celular</label>
      {!! $errors->first('celular', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m4">
      <input id="religion" type="tel" name="religion" class="validate" required>
      <label for="religion">Religion</label>
      {!! $errors->first('religion', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m4">
      <input id="curp" type="text" name="curp" class="validate" required>
      <label for="curp">CURP</label>
    </div>
    <div class="input-field col s12 m4">
      <input id="nombre2" type="text" name="nombre2" class="validate" required>
      <label for="nombre2">Persona en caso de emergencia</label>
      {!! $errors->first('nombre2', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12 m4">
      <input id="tel2" type="tel" name="tel2" class="validate" required>
      <label for="tel2">Telefono/Celular</label>
      {!! $errors->first('tel2', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="input-field col s12">
      <input id="motivo" type="text" name="motivo" class="validate" required>
      <label for="motivo">Motivo de la consulta</label>
      {!! $errors->first('motivo', '<span style="color:red" id="error_msj" class="helper-text" data-error="wrong" data-success="right">:message</span>') !!}

    </div>
    <div class="row">

    </div>
    <button type="submit" onclick="habilitarBotones()" class="btn col s12 m4 push-m4" name="button">Guardar</button>
  </div>

</form>

</div>

@endsection

@section('scripts')

@endsection

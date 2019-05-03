@extends('layouts.app_medico')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">

<link href="{{{ asset('css/medico/registrar.css') }}}" rel="stylesheet">


@endsection

@section('title', 'Identificacion')

@section('content')
<div class="fixed-action-btn" onclick="backTop()">
    <a class="btn-floating btn-large">
        <i class="fas fa-arrow-up"></i>
    </a>
</div>
@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

<div class="row">
    <div class="contenedor col s12 m8 push-m2">
        <h2>Citas {{-- $idpac --}}</h4>
    </div>
</div>
<div class="row">
    <ul class="collapsible col s12 m10 push-m1">
        <li>
            <div class="collapsible-header"><i class="material-icons">menu</i>Menú </div>
            <div class="collapsible-body">
                <div class="row botones">
                    <button type="button" class="btn class s4 menu" onclick="valoracion()">Notas de Valoración</button>
                    <button type="button" class="btn class s4 menu" onclick="evolucion()">Notas de Evolución</button>
                    <button type="button" class="btn class s4 menu" onclick="secciones()">Secciones</button>
                </div>
            </div>
        </li>
    </ul>
</div>

<form class="" id="valoracion" action="" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <h5 style="font-weight:bold;"> Notas de Valoración</h5>
        <table class="responsive-table striped">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>EVA</th>
                    <th>Pruebas funcionales</th>
                    <th>Actividad Funcional</th>
                    <th>Fuerza</th>
                    <th>ROM</th>
                </tr>
            </thead>
            <tbody>
                @if($user->count())
                @foreach($user as $usuario)

                {{ csrf_field() }}
    </div>
    <tr>

        <td>
            {{$usuario->apellidoP}}
        </td>
        <td>
            {{$usuario->apellidoP}}
        </td>
        <td>
            {{$usuario->apellidoP}}
        </td>
        <td>
            {{$usuario->apellidoP}}
        </td>
        <td>
            {{$usuario->apellidoP}}
        </td>
        <td>
            {{$usuario->apellidoP}}
        </td>
    </tr>
    @endforeach
    @endif

    <tr>
        <td>
            <div class="input-field col s12">
                <textarea id="ta_enf_reu" name="ta_enf_reu" class="materialize-textarea"></textarea>
                <label for="ta_enf_reu">Escribe aquí</label>
            </div>
        </td>
        <td>
            <div class="input-field col s12">
                <textarea id="ta_enf_reu" name="ta_enf_reu" class="materialize-textarea"></textarea>
                <label for="ta_enf_reu">Escribe aquí</label>
            </div>
        </td>
        <td>
            <div class="input-field col s12">
                <textarea id="ta_enf_reu" name="ta_enf_reu" class="materialize-textarea"></textarea>
                <label for="ta_enf_reu">Escribe aquí</label>
            </div>
        </td>
        <td>
            <div class="input-field col s12">
                <textarea id="ta_enf_reu" name="ta_enf_reu" class="materialize-textarea"></textarea>
                <label for="ta_enf_reu">Escribe aquí</label>
            </div>
        </td>

        <td>
            <div class="input-field col s12">
                <textarea id="ta_enf_reu" name="ta_enf_reu" class="materialize-textarea"></textarea>
                <label for="ta_enf_reu">Escribe aquí</label>
            </div>
        </td>
        <td>
            <div class="input-field col s12">
                <textarea id="ta_enf_reu" name="ta_enf_reu" class="materialize-textarea"></textarea>
                <label for="ta_enf_reu">Escribe aquí</label>
            </div>
        </td>
    </tr>
    </tbody>
    </table>
    <div class="row"></div>
    <button type="submit" class="btn col s12 m4 push-m4" name="button">Guardar Nota </button>
    </div>
</form>



@endsection

@section('scripts')
<script src="{{{ asset('js/registro.js') }}}"></script>
@endsection
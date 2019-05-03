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
                    @if(isset($user))
                    @if($user->count())
                    @foreach($user as $usuario)
                    {{ csrf_field() }}
                    <button type="submit" href="{{ route('',[$usuario->id_ficha]) }}" class="btn class s4 menu"
                        onclick="valoracion()">Notas de Valoración</button>
                    <button type="submit" href="{{ route('',[$usuario->id_ficha]) }}" class="btn class s4 menu"
                        onclick="evolucion()">Notas de Evolución</button>
                    
                    @endforeach
                    @endif

                    @else
                    <button type="submit" href="" class="btn class s4 menu"
                        onclick="valoracion()">Notas de Valoración</button>
                    <button type="submit" href="" class="btn class s4 menu"
                        onclick="evolucion()">Notas de Evolución</button>
                    @endif

                </div>
            </div>
        </li>
    </ul>
</div>

<div class="section container">
    {{--  nota de valoración --}}
    <form class="" id="valoracion" action="{{ route('reg_val',[ $idpac ]) }}" method="POST">
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
                    @if(isset($user))
                    @if($user->count())
                    @foreach($user as $usuario)

                    {{ csrf_field() }}

                    <tr>

                        <td>
                            {{$usuario->fecha}}
                        </td>
                        <td>
                            {{$usuario->eva}}
                        </td>
                        <td>
                            {{$usuario->pruebasf}}
                        </td>
                        <td>
                            {{$usuario->actividadf}}
                        </td>
                        <td>
                            {{$usuario->fuerza}}
                        </td>
                        <td>
                            {{$usuario->id_f}}
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    @endif

                    <tr>
                        <td>
                            <div class="input-field col s12">
                                <input id="fecha" name="fecha" type="date" class="">
                            </div>
                        </td>
                        <td>
                            <div class="input-field col s12">
                                <textarea id="ta_enf_reu" name="eva" class="materialize-textarea"></textarea>
                                <label for="ta_enf_reu">Escribe aquí</label>
                            </div>
                        </td>
                        <td>
                            <div class="input-field col s12">
                                <textarea id="ta_enf_reu" name="pruebasf" class="materialize-textarea"></textarea>
                                <label for="ta_enf_reu">Escribe aquí</label>
                            </div>
                        </td>
                        <td>
                            <div class="input-field col s12">
                                <textarea id="ta_enf_reu" name="actividadf" class="materialize-textarea"></textarea>
                                <label for="ta_enf_reu">Escribe aquí</label>
                            </div>
                        </td>

                        <td>
                            <div class="input-field col s12">
                                <textarea id="ta_enf_reu" name="fuerza" class="materialize-textarea"></textarea>
                                <label for="ta_enf_reu">Escribe aquí</label>
                            </div>
                        </td>
                        <td>
                            <div class="input-field col s12">
                                <textarea id="ta_enf_reu" name="rom" class="materialize-textarea"></textarea>
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

    {{-- Nota de Evolucion  --}}
    <form class="" id="evolucion" action="{{ route('reg_val',[ $idpac ]) }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <h5 style="font-weight:bold;"> Notas de Evolución</h5>
            <table class="responsive-table striped">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nota de Evolución</th>

                    </tr>
                </thead>
                <tbody>
                    @if(isset($user))
                    @if($user->count())
                    @foreach($user as $usuario)

                    {{ csrf_field() }}

                    <tr>

                        <td>
                            {{$usuario->fecha}}
                        </td>
                        <td>
                            {{$usuario->nota}}
                        </td>

                    </tr>
                    @endforeach
                    @endif
                    @endif

                    <tr>


                        <td>
                            <div class="input-field col s12">
                                <input id="fecha" name="fecha" type="date" class="">
                            </div>
                        </td>
                        <td>
                            <div class="input-field col s12">
                                <textarea id="ta_enf_reu" name="nota" class="materialize-textarea"></textarea>
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
</div>




@endsection

@section('scripts')
<script src="{{{ asset('js/registro.js') }}}"></script>
@endsection
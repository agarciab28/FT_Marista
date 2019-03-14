<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#003865" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    @yield('stylesheet')
    <title>FT - @yield('title')</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <header>
    	<nav>
    		<div class="nav-wrapper">
    			<div class="row">
    				<div class="col s12">
    					<a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
              <a class="left black-text show-on-small-and-up">Titulo - Juanito Perez</a>
              <div class="section ">
                <a href="../" class="waves-effect waves-light btn right show-on-medium-and-up hide-on-small-only">Cerrar Sesion</a>
              </div>
    				</div>
    			</div>
    		</div>
    	</nav>
    </header>

    <!-- LEFT SIDEBAR	 -->
    <ul id="sidenav-1" class="sidenav sidenav-fixed">
      <li>
        <div class="row section">
          <img class="responsive-img col s10 push-s1" src="{{{ asset('img/logos/logo_1_b.png') }}}">
        </div>
      </li>
    	<li id="home"><a class="white-text" href="../admin"><i class="fas fa-home white-text" style="margin-right:0;"></i>Inicio</a></li>
    	<li id="registrar"><a class="white-text" href="../admin/registrar"><i class="fas fa-user-plus white-text" style="margin-right:0;"></i>Registrar Usuario</a></li>
      <li id="usuarios"><a class="white-text" href="../admin/usuarios"><i class="fas fa-user white-text" style="margin-right:0;"></i>Usuarios</a></li>
      <li id="ver"><a class="white-text" href="../admin/ver"><i class="fas fa-address-book white-text" style="margin-right:0px;"></i>Ver Identificacion</a></li>
     <li id="buscar"><a class="white-text" href="../admin/buscar"><i class="fas fa-search white-text" style="margin-right:0px;"></i>Buscar Paciente</a></li>
     <li id="cerrar_sesion"><a class="show-on-small hide-on-med-and-up white-text" href="">Cerrar Sesion</a></li>

    </ul>

    <main>
      @yield('content')
    </main>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{{ asset('js/init.js') }}}"></script>
  @yield('scripts')
</html>

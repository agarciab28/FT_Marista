<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta login
Route::get('/', function () {
    return view('login');
});

// Rutas Admin
Route::get('/admin', function(){
  return view('admin.home');
});

Route::get('/admin/registrar', function(){return view('admin.registrar');})->name('admin_registrar');

Route::get('/admin/usuarios', function(){
  return view('admin.usuarios');
});

Route::get('/admin/buscar', 'UsuarioController@listpacientesadmin');

Route::get('/admin/buscar/ver', function(){
  return view('admin.ver');
});

Route::get('/admin/estadisticas', function(){
  return view('admin.estadisticas');
});

Route::get('/admin/modificar_usuario', function(){
  return view('admin.modificar_usuario');
});

// Rutas Medico
Route::get('/medico', function(){
  return view('medico.home');
});

Route::get('/medico/registrar', function(){
  return view('medico.registrar');
});

//Route::get('/medico/buscar', function(){return view('medico.buscar');});
Route::get('/medico/buscar', 'UsuarioController@listpacientes');

Route::get('/medico/buscar/ver', function(){
  return view('medico.ver');
});

// Rutas Practicante
Route::get('/practicante', function(){
  return view('practicante.home');
});

//Route::get('/practicante/buscar', function(){return view('practicante.buscar');});
//Route::get('/practicante/buscar', 'UsuarioController@listpacientes');
Route::get('/practicante/buscar', 'UsuarioController@listpacientespract');


Route::get('/practicante/buscar/ver', function(){
  return view('practicante.ver');
});

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::resource('reguser', 'UsuarioController');

Route::get('listu', 'UsuarioController@listusuarios')->name('listu');

Route::post('/registrarf','UsuarioController@store_ficha_id')->name('store_ficha_id');

Route::get('modificar_usuario/{id}', 'UsuarioController@listusuarios_mod')->name('modificar_usuario');

Route::post('modifica_usuario_metodo/{id}', 'UsuarioController@modificar_mod')->name('modifica_usuario_metodo');

Route::get('deleteuser/{id}', 'UsuarioController@deleteuser')->name('deleteuser');

Route::get('/medico/buscar/citas', function(){
  return view('medico.citas');
});

Route::get('datos_ficha/{curp}', 'UsuarioController@datos_ficha')->name('datos_ficha');
Route::get('datos_ficha_med/{curp}', 'UsuarioController@datos_ficha_med')->name('datos_ficha_med');
Route::get('datos_ficha_pra/{curp}', 'UsuarioController@datos_ficha_pra')->name('datos_ficha_pra');

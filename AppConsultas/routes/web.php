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

Route::get('/admin/buscar', function(){
  return view('admin.buscar');
});

Route::get('/admin/buscar/ver', function(){
  return view('admin.ver');
});

Route::get('/admin/estadisticas', function(){
  return view('admin.estadisticas');
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

Route::get('/practicante/buscar', function(){
  return view('practicante.buscar');
});

Route::get('/practicante/buscar/ver', function(){
  return view('practicante.ver');
});

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::resource('reguser', 'UsuarioController');

Route::get('listu', 'UsuarioController@listusuarios')->name('listu');


Route::post('/registrarf','UsuarioController@store_ficha_id')->name('store_ficha_id');

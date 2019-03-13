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

Route::get('/admin/registrar', function(){
  return view('admin.registrar');
});

Route::get('/admin/modificar', function(){
  return view('admin.modificar');
});

Route::get('/admin/eliminar', function(){
  return view('admin.eliminar');
});

Route::get('/admin/buscar', function(){
  return view('admin.buscar');
});

Route::get('/admin/ver', function(){
  return view('admin.ver');
});

// Rutas Medico
Route::get('/medico', function(){
  return view('medico.home');
});

Route::get('/medico/registrar', function(){
  return view('medico.registrar');
});

Route::get('/medico/buscar', function(){
  return view('medico.buscar');
});

// Rutas Practicante
Route::get('/practicante', function(){
  return view('practicante.home');
});

Route::get('/practicante/buscar', function(){
  return view('practicante.buscar');
});

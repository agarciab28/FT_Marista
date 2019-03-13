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

Route::get('/', function () {
    return view('login');
});

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

Route::get('/admin/ver', function(){
  return view('admin.ver');
});

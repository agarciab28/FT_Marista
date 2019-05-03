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
Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/admin/registrar', function () {return view('admin.registrar');})->name('admin_registrar');

Route::get('/admin/usuarios', function () {
    return view('admin.usuarios');
});

Route::get('/admin/buscar', 'UsuarioController@listpacientesadmin');

Route::get('/admin/buscar/ver', function () {
    return view('admin.ver');
});

Route::get('/admin/estadisticas', function () {
    return view('admin.estadisticas');
});
Route::get('/estadisticas','EstadisticasController@sendstats')->name('admin_estats');
Route::get('/admin/modificar_usuario', function(){
  return view('admin.modificar_usuario');
});

// Rutas Medico
Route::get('/medico', function () {
    return view('medico.home');
});
//medico---------------------------------------------------------------------------------------------------
Route::get('/medico/ficha_id', function () {
    return view('medico.ficha_id');
})->name('reg_fichaid');



//Route::get('/medico/registrar', 'UsuarioController@retvar')->name('med_reg');

//Route::get('/medico/buscar', function(){return view('medico.buscar');});
Route::get('/medico/buscar', 'UsuarioController@listpacientes');

Route::get('/medico/buscar/ver', function () {
    return view('medico.ver');
});

// Rutas Practicante
Route::get('/practicante', function () {
    return view('practicante.home');
});

//Route::get('/practicante/buscar', function(){return view('practicante.buscar');});
//Route::get('/practicante/buscar', 'UsuarioController@listpacientes');
Route::get('/practicante/buscar', 'UsuarioController@listpacientespract');

Route::get('/practicante/buscar/ver', function () {
    return view('practicante.ver');
});

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::resource('reguser', 'UsuarioController');

Route::get('listu', 'UsuarioController@listusuarios')->name('listu');

Route::post('/registrarf', 'UsuarioController@store_ficha_id')->name('store_ficha_id');

Route::get('modificar_usuario/{id}', 'UsuarioController@listusuarios_mod')->name('modificar_usuario');

Route::post('modifica_usuario_metodo/{id}', 'UsuarioController@modificar_mod')->name('modifica_usuario_metodo');

Route::get('deleteuser/{id}', 'UsuarioController@deleteuser')->name('deleteuser');

Route::get('/medico/registrar/{idpac}', function ($idpac) {
  return view('medico.registrar', compact('idpac'));
})->name('med_reg');

Route::get('/medico/buscar/citas/{idpac}', function ($idpac) {
    return view('medico.citas',compact('idpac'));
})->name('med_bc');

//Route::get('/medico/ver_detalles/', function(){
//  return view('medico.ver_detalles');
//})->name('med_ver_det');



///registro historialcontroller
Route::post('/ant_hered_fam/{idpac}', 'historialcontroller@ant_hered_fam1')->name('hcahf');
Route::post('/ant_pp/{idpac}', 'historialcontroller@anpp')->name('anpepa');
Route::post('/ant_ppp/{idpac}', 'historialcontroller@hcapnpp')->name('appp');
Route::post('/ant_gop/{idpac}', 'historialcontroller@hcagoo')->name('agop');
Route::post('/padactual/{idpac}', 'historialcontroller@padact')->name('padac');
Route::post('/sintg/{idpac}', 'historialcontroller@sintgg')->name('sintg');
Route::post('/apa_sis/{idpac}', 'historialcontroller@hapa_sis')->name('apa_sis');
Route::post('/diaga/{idpac}', 'historialcontroller@diagam')->name('diaga');
Route::post('/expf/{idpac}', 'historialcontroller@expfm')->name('expf');
Route::post('/expg/{idpac}', 'historialcontroller@expgm')->name('expg');
Route::post('/expr/{idpac}', 'historialcontroller@exprm')->name('expr');
Route::post('/smpr/{idpac}', 'historialcontroller@smprm')->name('smpr');
Route::post('/arcm/{idpac}', 'historialcontroller@arcmm')->name('arcm');
Route::post('/diagf/{idpac}', 'historialcontroller@diagfm')->name('diagf');
Route::post('/parn/{idpac}', 'historialcontroller@parnm')->name('parn');
Route::post('/tpm/{idpac}', 'historialcontroller@tpmm')->name('tpm');

//
Route::get('datos_ficha/{curp}', 'UsuarioController@datos_ficha')->name('datos_ficha');
Route::get('datos_ficha_med/{id}', 'UsuarioController@datos_ficha_med')->name('datos_ficha_med');
Route::get('datos_ficha_pra/{curp}', 'UsuarioController@datos_ficha_pra')->name('datos_ficha_pra');
// registro y consulta de notas ve valoracion y evolucion
Route::post('/reg_val/{idpac}', 'UsuarioController@reg_val')->name('reg_val');
Route::post('/reg_evo/{idpac}', 'UsuarioController@reg_evo')->name('reg_evo');
Route::get('med_ver_det/{id}', 'UsuarioController@med_ver_detm')->name('med_ver_det');

Route::get('lis_not_val/{idpac}', 'UsuarioController@lis_not_val')->name('lis_not_val');
Route::get('lis_not_evo/{idpac}', 'UsuarioController@lis_not_evo')->name('lis_not_evo');

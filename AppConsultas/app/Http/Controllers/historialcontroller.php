<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\hchf;
use App\Models\hcapp;
use App\Models\hcapnp;
use App\Models\hcago;
use App\Models\hcpadeactual;
use App\Models\hcsintoasgenerales;
use App\Models\hcays;
use App\Models\hcda;
use App\Models\hcexploracion_fisica;
use App\Models\hcexploracion_general;
use App\Models\hcexploracion_por_region;
use App\Models\hcsme;
use App\Models\hcarcodemovimiento;
class historialcontroller extends Controller
{
    //

public function ant_hered_fam1(Request $request, $idpac){
//dd($idpac);
$wea1 = $request->get('ta_enf_reu').": ".$request->get('madre1')." ".$request->get('padre1')." ".$request->get('abuelos1')." ".$request->get('hermanos1')."  ".$request->get('otros1');
$wea2 = $request->get('ta_enf_sisnerv').": ".$request->get('madre2')."  ".$request->get('padre2')."  ".$request->get('abuelos2')." ".$request->get('hermanos2')." ".$request->get('otros2');
$wea3 = $request->get('ta_sindromes').": ".$request->get('madre3')." ".$request->get('padre3')." ".$request->get('abuelos3')." ".$request->get('hermanos3')." ".$request->get('otros3');
$wea4 = $request->get('ta_malfor').": ".$request->get('madre4')." ".$request->get('padre4')." ".$request->get('abuelos4')." ".$request->get('hermanos4')." ".$request->get('otros4');
$wea5 = $request->get('ta_congenitas').": ".$request->get('madre5')." ".$request->get('padre5')." ".$request->get('abuelos5')." ".$request->get('hermanos5')." ".$request->get('otros5');
$wea6 = $request->get('ta_diabetes').": ".$request->get('madre6')." ".$request->get('padre6')." ".$request->get('abuelos6')." ".$request->get('hermanos6')." ".$request->get('otros6');
$wea7 = $request->get('ta_hiper_art').": ".$request->get('madre7')." ".$request->get('padre7')." ".$request->get('abuelos7')." ".$request->get('hermanos7')." ".$request->get('otros7');
$wea8 = $request->get('ta_cancer').": ".$request->get('madre8')." ".$request->get('padre8')." ".$request->get('abuelos8')." ".$request->get('hermanos8')." ".$request->get('otros8');
$wea9 = $request->get('ta_cardio').": ".$request->get('madre9')." ".$request->get('padre9')." ".$request->get('abuelos9')." ".$request->get('hermanos9')." ".$request->get('otros9');
$wea10 = $request->get('ta_vascu').": ".$request->get('madre10')." ".$request->get('padre10')." ".$request->get('abuelos10')." ".$request->get('hermanos10')." ".$request->get('otros10');
$wea11 = $request->get('ta_pulmon').": ".$request->get('madre11')." ".$request->get('padre11')." ".$request->get('abuelos11')." ".$request->get('hermanos11')." ".$request->get('otros11');
$wea12 = $request->get('ta_hepto').": ".$request->get('madre12')." ".$request->get('padre12')." ".$request->get('abuelos12')." ".$request->get('hermanos12')." ".$request->get('otros12');
$wea13 = $request->get('ta_nefro').": ".$request->get('madre13')." ".$request->get('padre13')." ".$request->get('abuelos13')." ".$request->get('hermanos13')." ".$request->get('otros13');
$wea14 = $request->get('ta_diges').": ".$request->get('madre14')." ".$request->get('padre14')." ".$request->get('abuelos14')." ".$request->get('hermanos14')." ".$request->get('otros14');
$wea15 = $request->get('ta_endo').": ".$request->get('madre15')." ".$request->get('padre15')." ".$request->get('abuelos15')." ".$request->get('hermanos15')." ".$request->get('otros15');
$wea16 = $request->get('ta_trans_hemato').": ".$request->get('madre16')." ".$request->get('padre16')." ".$request->get('abuelos16')." ".$request->get('hermanos16')." ".$request->get('otros16');
$wea17 = $request->get('ta_disli').": ".$request->get('madre17')." ".$request->get('padre17')." ".$request->get('abuelos17')." ".$request->get('hermanos17')." ".$request->get('otros17');
$wea18 = $request->get('ta_otros').": ".$request->get('madre18')." ".$request->get('padre18')." ".$request->get('abuelos18')." ".$request->get('hermanos18')." ".$request->get('otros18');

$ahf = new hchf([
    'enfermedadesreumatologicas' => $wea1,
    'enfermadessn' => $wea2,
    'sindromes' => $wea3,
    'malformaciones' => $wea4 ,
    'congenitas' => $wea5,
    'diabetes' => $wea6 ,
    'hipertensionas' => $wea7 ,
    'cancer'  => $wea8,
    'cardiopatias' => $wea9 ,
    'vasculares' => $wea10,
    'pulmonares' => $wea11,
    'heptopatias' => $wea12,
    'nefropatias'=> $wea13 ,
    'digestivos' => $wea14,
    'endrocrinopatias'=> $wea15 ,
    'transtornosh' => $wea16,
    'dislipidemias' => $wea17,
    'otros' => $wea18,
    'id_f' => $idpac
]);

$ahf->save();
//dd($ahf);

  return back();
}

public function anpp(Request $request, $idpac){
$happ = new hcapp([
  'tipoconstruccionnf' => $request->get('ta_construc'),
  'suelonoregular' => $request->get('ta_suelo'),
  'escalaresda' => $request->get('ta_escaleras'),
  'ventilacionina' => $request->get('ta_vent'),
  'hacinamiento' => $request->get('ta_hacin'),
  'adaptacionesyaux'  => $request->get('ta_aya'),
  'serviciosdeagua'  => $request->get('ta_sda'),
  'serviciosdeluz'  => $request->get('ta_sdl'),
  'serviciosd'  => $request->get('ta_sdd'),
  'habitospersonalesb'  => $request->get('ta_hpb'),
  'higienebucal'  => $request->get('ta_hb'),
  'defecacion' => $request->get('ta_defec'),
  'tabaquismo' => $request->get('ta_taba'),
  'alcoholismo' => $request->get('ta_alco'),
  'toxicomanias' => $request->get('ta_toxi'),
  'alimentacion' => $request->get('ta_alim'),
  'inmunizaciones' => $request->get('ta_inmun'),
  'trabajodescanso' => $request->get('ta_trades'),
  'pasatiempo' => $request->get('ta_pas'),
  'deporte' => $request->get('ta_dep'),
  'id_f' => $idpac
  ]);
$happ->save();

  return back();
}


public function hcapnpp(Request $request, $idpac){

  $hapnp = new hcapnp([
  'eninin' => $request->get('ta_enf_inf'),
  'intervencionesq' => $request->get('ta_inter'),
  'traumatismos' => $request->get('ta_trauma'),
  'infiltraciones' => $request->get('ta_infi'),
  'hospitalizaciones' => $request->get('ta_hospi'),
  'perdidadeconocimiento' => $request->get('ta_per_con'),
  'intoleranciamed' => $request->get('ta_int_med'),
  'transfusiones' => $request->get('ta_trans'),
  'medicamentos' => $request->get('ta_meds'),
  'ta_ets' => $request->get('ta_ets'),
   'id_f' => $idpac
    ]);

  $hapnp->save();

  return back();
}

public function hcagoo(Request $request, $idpac){

$y1 = $request->get('ta_menarca').';'.$request->get('fecha1');
$y2 = $request->get('ta_ritmo').';'.$request->get('fecha2');
$y3 = $request->get('ta_partos').';'.$request->get('fecha3');
$y4 = $request->get('ta_abortos').';'.$request->get('fecha4');
$y5 = $request->get('ta_cesareas').';'.$request->get('fecha5');
$y6 = $request->get('ta_met_anti').';'.$request->get('fecha6');
$y7 = $request->get('ta_fum').';'.$request->get('fecha7');
$y8 = $request->get('ta_ivsa').';'.$request->get('fecha8');

  $x = new hcago([
    'menarca' => $y1,
    'ritmomenstrual' => $y2,
    'partos' => $y3,
    'abortos' => $y4,
    'cesareas' => $y5,
    'metodoanticoncept' => $y6,
    'fum' => $y7,
    'ivsa' => $y8,
    'id_f' => $idpac
  ]);
$x->save();
  return back();
}

public function padact(Request $request, $idpac){
  $x1 = $request->get('ta_pad_inicio').';'.$request->get('eva_inicio');
  $x2 = $request->get('ta_pad_evol').';'.$request->get('eva_evolucion');
  $x3 =   $request->get('ta_pad_actual').';'.$request->get('eva_actual');

  $y = new hcpadeactual([
    'inicio' => $x1,
    'evolucion' => $x2,
    'actual' => $x3,
    'id_f' => $idpac
  ]);

$y->save();

return back();
}
public function sintgg(Request $request, $idpac){
  $x1 = $request->get('astenia');
  $x2 = $request->get('adinamia');
  $x3 = $request->get('anorexia');
  $x4 = $request->get('fiebre');
  $x5 = $request->get('perd_peso');


  $y = new hcsintoasgenerales([
    'astonia' => $x1,
    'adinamia' => $x2,
    'anorexia' => $x3,
    'fiebre' => $x4,
    'perdidadepeso' => $x5,
    'id_f' => $idpac
  ]);
$y->save();

return back();
}

public function hapa_sis(Request $request, $idpac){
  $x1 = $request->get('ap_diges').';'.$request->get('ta_ap_diges');
  $x2 = $request->get('ap_cardio').';'.$request->get('ta_ap_cardio');
  $x3 = $request->get('ap_respi').';'.$request->get('ta_ap_respi');
  $x4 = $request->get('ap_urin').';'.$request->get('ta_ap_urin');
  $x5 = $request->get('ap_genital').';'.$request->get('ta_ap_genital');
  $x6 = $request->get('ap_hemato').';'.$request->get('ta_ap_hemato');
  $x7 = $request->get('sis_endo').';'.$request->get('ta_sis_endo');
  $x8 = $request->get('sis_nerv').';'.$request->get('ta_sis_nerv');
  $x9 = $request->get('sis_senso').';'.$request->get('ta_sis_senso');
  $x10 = $request->get('sis_osteo').';'.$request->get('ta_sis_osteo');

  $y = new hcays([
    'aparatodigestivo' => $x1,
    'aparatocardiovas' => $x2,
    'aparatorespiratorio' => $x3,
    'aparatourinario' => $x4,
    'aparatogenital' => $x5,
    'aparatohematologico' => $x6,
    'aparatoendocrino' => $x7,
    'aparatonervioso' => $x8,
    'aparatosensorial' => $x9,
    'aparatoosteomuscu' => $x10,
    'id_f' => $idpac
  ]);
$y->save();
return back();
}

public function diagam(Request $request, $idpac){
  $y = new hcda([
    'diagant' => $request->get('ta_diag_ant'),
    'estudiog' => $request->get('ta_est_gab'),
    'tratamientosant' => $request->get('ta_trat_ant'),
    'inquietudsub' => $request->get('ta_inquietud'),
    'id_f' => $idpac
  ]);
$y->save();
return back();
}

public function expfm(Request $request, $idpac){
  $y = new hcexploracion_fisica([
    'ta' => $request->get('t_a'),
    'fc' => $request->get('fc'),
    'fr' => $request->get('fr'),
    'temp' => $request->get('temp'),
    'talla' => $request->get('talla'),
    's02' => $request->get('s02'),
    'pesoactual' => $request->get('peso_actual'),
    'pesoanterior' => $request->get('peso_anterior'),
    'pesoideal' => $request->get('peso_ideal'),
    'imc' => $request->get('imc'),
    'id_f' => $idpac
  ]);

$y->save();
return back();
}


public function expgm(Request $request, $idpac){

  $y = new hcexploracion_general([
    'estadodecon' => $request->get('est_conci'),
    'actitud' => $request->get('acti'),
    'movimientosanormales' => $request->get('mov_anormales'),
    'postura' => $request->get('postura'),
    'marcha' => $request->get('marcha'),
    'estadogdn' => $request->get('est_nutri'),
    'fuerzamuscular' => $request->get('fuer_m'),
    'pruebasfuncionales' => $request->get('prub_fun'),
    'id_f' => $idpac
  ]);
$y->save();
return back();
}
public function exprm(Request $request, $idpac){

  $y = new hcexploracion_por_region([
    'pielyanexo' => $request->get('piel'),
    'cabeza' => $request->get('cabeza'),
    'ojos' => $request->get('ojos'),
    'oidos' => $request->get('oidos'),
    'narizyseno' => $request->get('nariz_senos'),
    'boca' => $request->get('boca'),
    'torax' => $request->get('torax'),
    'vasossanguineos' => $request->get('vasos_sang'),
    'mamas' => $request->get('mamas'),
    'genitales' => $request->get('genitales'),
    'abdomen' => $request->get('abdomen'),
    'otros' => $request->get('otros'),
    'id_f' => $idpac
  ]);
$y->save();
return back();
}

public function smprm(Request $request, $idpac){
$x1 = $request->get('cervical').";".$request->get('dorso').";".$request->get('sacro');
$x2 = $request->get('hombros').";".$request->get('codo').";".$request->get('muñeca').";".$request->get('mano');
$x3 = $request->get('cadera').";".$request->get('rodilla').";".$request->get('tobillo').";".$request->get('pie');
  $y = new hcsme([
    'columna' => $x1,
    'miembrosuperior' => $x2,
    'miembroinferior' => $x3,
    'id_f' => $idpac
  ]);
$y->save();
return back();
}

public function arcmm(Request $request, $idpac){
$x1=$request->get('columcerv_flex').",".$request->get('columcerv_exten').",".$request->get('columcerv_rotintern').",".$request->get('columcerv_rotextern').",".$request->get('columcerv_abdu').",".$request->get('columcerv_adu').",".$request->get('columcerv_desvrad').",".$request->get('columcerv_desvcubi').
";".$request->get('columdors_flex').",".$request->get('columdors_exten').",".$request->get('columdors_rotintern').",".$request->get('columdors_rotextern').",".$request->get('columdors_abdu').",".$request->get('columdors_adu').",".$request->get('columdors_desvrad').",".$request->get('columdors_desvcubi').
";".$request->get('columlumb_flex').",".$request->get('columlumb_exten').",".$request->get('columlumb_rotintern').",".$request->get('columlumb_rotextern').",".$request->get('columlumb_abdu').",".$request->get('columlumb_adu').",".$request->get('columlumb_desvrad').",".$request->get('columlumb_desvcubi').
";".$request->get('hombro_flex').",".$request->get('hombro_exten').",".$request->get('hombro_rotintern').",".$request->get('hombro_rotextern').",".$request->get('hombro_abdu').",".$request->get('hombro_adu').",".$request->get('hombro_desvrad').",".$request->get('hombro_desvcubi').
";".$request->get('codo_flex').",".$request->get('codo_exten').",".$request->get('codo_rotintern').",".$request->get('codo_rotextern').",".$request->get('codo_abdu').",".$request->get('codo_adu').",".$request->get('codo_desvrad').",".$request->get('codo_desvcubi').
";".$request->get('muñeca_flex').",".$request->get('muñeca_exten').",".$request->get('muñeca_rotintern').",".$request->get('muñeca_rotextern').",".$request->get('muñeca_abdu').",".$request->get('muñeca_adu').",".$request->get('muñeca_desvrad').",".$request->get('muñeca_desvcubi').
";".$request->get('mano_flex').",".$request->get('mano_exten').",".$request->get('mano_rotintern').",".$request->get('mano_rotextern').",".$request->get('mano_abdu').",".$request->get('mano_adu').",".$request->get('mano_desvrad').",".$request->get('mano_desvcubi').
";".$request->get('cadera_flex').",".$request->get('cadera_exten').",".$request->get('cadera_rotintern').",".$request->get('cadera_rotextern').",".$request->get('cadera_abdu').",".$request->get('cadera_adu').",".$request->get('cadera_desvrad').",".$request->get('cadera_desvcubi').
";".$request->get('rodilla_flex').",".$request->get('rodilla_exten').",".$request->get('rodilla_rotintern').",".$request->get('rodilla_rotextern').",".$request->get('rodilla_abdu').",".$request->get('rodilla_adu').",".$request->get('rodilla_desvrad').",".$request->get('rodilla_desvcubi').
";".$request->get('tobillo_flex').",".$request->get('tobillo_exten').",".$request->get('tobillo_rotintern').",".$request->get('tobillo_rotextern').",".$request->get('tobillo_abdu').",".$request->get('tobillo_adu').",".$request->get('tobillo_desvrad').",".$request->get('tobillo_desvcubi').
";".$request->get('pie_flex').",".$request->get('pie_exten').",".$request->get('pie_rotintern').",".$request->get('pie_rotextern').",".$request->get('pie_abdu').",".$request->get('pie_adu').",".$request->get('pie_desvrad').",".$request->get('pie_desvcubi');

 $y = new hcarcodemovimiento([
   'datos' => $x1,
    'id_f' => $idpac
  ]);

$y->save();
return back();
}

}

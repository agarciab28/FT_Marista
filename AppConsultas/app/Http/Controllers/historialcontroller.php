<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\hchf;

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

}

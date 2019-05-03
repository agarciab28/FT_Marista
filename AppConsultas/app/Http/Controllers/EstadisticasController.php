<?php
namespace App\Http\Controllers;
use App\Models\ficha_id;
use DB;
class historialcontroller extends Controller
{
    public function sendstats(){
        $edades=DB::Table('ficha_de_identificacion')->select('edad')->get();
        $generos=DB::Table('ficha_de_identificacion')->select('sexo')->get();
        $count1 = DB::table('hcsintomasgenerales')->count('astenia');
        $count2 = DB::table('hcsintomasgenerales')->count('adinamia');
        $count3 = DB::table('hcsintomasgenerales')->count('anorexia');
        $count4 = DB::table('hcsintomasgenerales')->count('fiebre');
        $count5 = DB::table('hcsintomasgenerales')->count('perdidadepeso');
        $sintomas=array(1 => $count1, $count2, $count3, $count4, $count5);
        $count11 = DB::table('hcays')->count('aparatodigestivo');
        $count22 = DB::table('hcays')->count('aparatocardiovas');
        $count33 = DB::table('hcays')->count('aparatorespiratorio');
        $count44 = DB::table('hcays')->count('aparatourinario');
        $count55 = DB::table('hcays')->count('aparatogenital');
        $count66 = DB::table('hcays')->count('aparatohematologico');
        $count77 = DB::table('hcays')->count('aparatoendocrino');
        $count88 = DB::table('hcays')->count('aparatonervioso');
        $count88 = DB::table('hcays')->count('aparatosensorial');
        $count88 = DB::table('hcays')->count('aparatoosteomuscu');
        $ays=array(1 => $count11, $count22, $count33, $count44, $count55,$count66,$count77,$count88);
        return view('admin.estadisticas',compact(['edades,generos,sintomas,ays']));
     }

}
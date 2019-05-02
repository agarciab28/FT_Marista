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
$wea = $request->get('madre1')." espacio ".$request->get('padre1');
$ahf = new hchf([
    'enfermedadesreumatologicas' => $wea
]);

dd($ahf);

  return back();
}

}

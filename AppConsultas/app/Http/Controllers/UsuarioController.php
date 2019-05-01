<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Usuario;
use App\Models\ficha_id;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        return view('\admin\registrar');
    }

    //listado general de usuarios
    public function listusuarios()
    {

        $usuario=Usuario::orderBy('apellidoP','asc')->get();
        return view('admin.usuarios',compact('usuario'));

    }

//datos del usuario que se requiera actualizar       
    public function listusuarios_mod($id)
    {
        $usuario=Usuario::orderBy('apellidoP','asc')
        ->where('id',$id)
        ->get();
        return view('admin.modificar_usuario',compact('usuario'));

    }
       
//metodo para actualizar registros
    public function modificar_mod(Request $request, $id){
  $usuario = Usuario::find($id);
  $usuario_n = [
    'nombre' => $request->get('nombre'),
    'apellidoP' => $request->get('apellidoP'),
    'apellidoM' => $request->get('apellidoM'),
    'correoElectronico' => $request->get('correoElectronico'),
    'nombreDeUsuario' => $request->get('nombreDeUsuario'),
    'password' => bcrypt($request->get('password')),
    'cedulaProfesional' => $request->get('cedulaProfesional'),
    'cedulaMoE' => $request->get('cedulaMoE'),
    'telefono' => $request->get('telefono'),
    'curp' => $request->get('curp')
    ];
  //dd($usuario_n);
  //dd($request->except('_token'));
  $usuario->update($usuario_n);
    return redirect()->route('listu');
    }

//listado de pacientes
    public function listpacientes()
    {

        $paciente=ficha_id::orderBy('apellidoP','asc')->get();
        return view('medico.buscar',compact('paciente'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //registro de usuarios
    public function store(Request $request)
    {
        //dd($request);
      // dd($request->get( 'nombreDeUsuario'));

      $this->validate($request,[ 'curp'=>'required', 'nombre'=>'required', 'password'=>'required', 'apellidoP'=>'required',
      'apellidoM'=>'required', 'telefono'=>'required' , 'correoElectronico'=>'required', 'nombreDeUsuario'=>'required' ,
       'tipoDeUsuario'=>'required', 'cedulaProfesional'=>'required', 'cedulaMoE'=>'required']);


        $Usuario = new Usuario([
            'curp' => $request->get('curp'),
            'nombre' => $request->get('nombre'),
            'password' => bcrypt($request->get('password')),
            'apellidoP' => $request->get('apellidoP'),
            'apellidoM' => $request->get('apellidoM'),
            'telefono' => $request->get('telefono'),
            'correoElectronico' => $request->get('correoElectronico'),
            'nombreDeUsuario' => $request->get('nombreDeUsuario'),
            'tipoDeUsuario' => $request->get('tipoDeUsuario'),
            'cedulaProfesional' => $request->get('cedulaProfesional'),
            'cedulaMoE' => $request->get('cedulaMoE')
        ]);
        //dd($Usuario);
        $Usuario->save();
        //return back()->with('status','Usuario registrado exitosamente');
        return view('\admin\registrar')->with('success','Usuario Registrado');

    }

//registro de pacientes, ficha de identidad
    public function store_ficha_id(Request $request)
    {

      $this->validate(request(), [
        'curp'  => 'required|max:30',
        'nombre' => 'required|max:70',
        'apellido_p' => 'required|max:45',
        'apellido_m' => 'required|max:45',
        'edad' => 'required|numeric|min:1|max:130',
        'sex' => 'required|in:M,F',
        'nacionalidad' => 'required|max:30',
        'est_civ' => 'required|in:S,C',
        'ocupacion' => 'required|max:40',
        'calle' => 'required|max:30',
        'numero_int' => 'required|numeric',
        'numero_ext' => 'required|numeric',
        'colonia' => 'required|max:30',
        'ciudad' => 'required|max:30',
        'estado' => 'required|max:20',
        'tel1' => 'required|max:15',
        'celular' => 'required|max:15',
        'religion' => 'required|max:20',
        'nombre2' => 'required|max:60',
        'tel2' => 'required',
        'motivo' => 'required|max:50'
      ]);

        $ficha = new ficha_id([
          'curp'  => $request->get('curp'),
          'nombre' => $request->get('nombre'),
          'apellidoP' => $request->get('apellido_p'),
          'apellidoM' => $request->get('apellido_m'),
          'edad' => $request->get('edad'),
          'sexo'  => $request->get('sex'),
          'nacionalidad'  => $request->get('nacionalidad'),
          'estadoCivil'  => $request->get('est_civ'),
          'ocupacion' => $request->get('ocupacion'),
          'calle' => $request->get('calle'),
          'num_int' => $request->get('numero_int'),
          'num_ext' => $request->get('numero_ext'),
          'colonia' => $request->get('colonia'),
          'ciudad' => $request->get('ciudad'),
          'estado' => $request->get('estado'),
          'telTrabajo' => $request->get('tel1'),
          'celular' => $request->get('celular'),
          'religion' => $request->get('religion'),
          'familiaAC' => $request->get('nombre2'),
          'celAC' => $request->get('tel2'),
          'motivoDeConsulta' => $request->get('motivo')

        ]);
       // dd($Usuario);
        $ficha->save();
        return redirect()->back()->withSuccess('Registro completado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($curp)
    {
        $usuario=Usuario::find($curp);
        return  view('admin.usuarios',compact('usuario'))->with('success','Usuario RegistradoS');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $id)
    {
    }
    public function deleteuser( $id)
    {  
         $user=DB::table('usuario')->where('id',$id);
       
         $user->delete();
       
        if (!$user) {
            return back()->with('success','Usuario eliminado exitosamente');
        } else {
            return back()->with('success','Usuario NO eliminado');
        }
    }

    
}

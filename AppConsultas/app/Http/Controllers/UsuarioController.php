<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Models\*;

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
    public function store(Request $request)
    {

      // dd($request->get( 'nombreDeUsuario'));
        $Usuario = new Usuario([
            'curp' => $request->get('curp'),
            'nombre' => $request->get('nombre'),
            'password' => $request->get('password'),
            'apellidoP' => $request->get('apellidoP'),
            'apellidoM' => $request->get('apellidoM'),
            'telefono' => $request->get('telefono'),
            'correoElectronico' => $request->get('correoElectronico'),
            'nombreDeUsuario' => $request->get('nombreDeUsuario'),
            'tipoDeUsuario' => $request->get('tipoDeUsuario'),
            'cedulaProfesional' => $request->get('cedulaProfesional'),
            'cedulaMoE' => $request->get('cedulaMoE')
        ]);
       // dd($Usuario);
        $Usuario->save();
        return redirect()->route('reguser.index')->with('success','Usuario Registrado');

    }

    public function store_ficha_id(Request $request)
    {
        $ficha = new ficha_id([
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'edad' => $request->get('edad'),
            'sex' => $request->get('sex'),
            'nacionalidad' => $request->get('nacionalidad'),
            'est_civ' => $request->get('est_civ'),
            'ocupacion' => $request->get('ocupacion'),
            'calle' => $request->get('calle'),
            'num' => $request->get('num'),
            'colonia' => $request->get('colonia'),
            'tel1' => $request->get('tel1'),
            'celular' => $request->get('celular'),
            'religion' => $request->get('religion'),
            'curp' => $request->get('curp'),
            'nombre2' => $request->get('nombre2'),
            'tel2' => $request->get('tel2'),
            'motivo' => $request->get('motivo')
        ]);
       // dd($Usuario);
        $ficha->save();
        return redirect()->route('reguser.index')->with('success','Usuario Registrado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

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

<?php

use Illuminate\Database\Seeder;
use  \App\usuario;
class practicante extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set foreign_key_checks = 0;');
        DB::table('usuario');
        DB::statement('set foreign_key_checks = 1;');
  
        $usuario= new usuario();
        $usuario->id='5';
        $usuario->curp='xxxxyxyxyxyxyxyzzz';
        $usuario->nombre='Laura';
        $usuario->password=bcrypt('secret');
        $usuario->apellidoP='Barriga';
        $usuario->apellidoM='Toledo';
        $usuario->telefono='44881631';
        $usuario->correoElectronico='example@example.com';
        $usuario->nombreDeUsuario='user2';
        $usuario->tipoDeUsuario='practicante';
        $usuario->cedulaProfesional='examplecedula';
        $usuario->cedulaMoE='exampleEspec';
        $usuario->save();
    }
}

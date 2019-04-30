<?php

use Illuminate\Database\Seeder;
use  \App\usuario;
class pasante extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set foreign_key_checks = 0;');
        DB::table('usuario')->truncate();
        DB::statement('set foreign_key_checks = 1;');
  
        $usuario= new usuario();
        $usuario->id='4';
        $usuario->curp='xxxxyxyxyxyxyxyxzz';
        $usuario->nombre='Mauricio';
        $usuario->password=hash_hmac('bcrypt','secret');
        $usuario->apellidoP='Teñia';
        $usuario->apellidoM='Castro';
        $usuario->telefono='44881631';
        $usuario->correoElectronico='example@example.com';
        $usuario->nombreDeUsuario='user1';
        $usuario->tipoDeUsuario='pasante';
        $usuario->save();
    }
}

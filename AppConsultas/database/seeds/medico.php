<?php

use Illuminate\Database\Seeder;
use  \App\usuario;
class medico extends Seeder
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
        $usuario->id='3';
        $usuario->curp='zxxxyxyxyxyxyxyxxz';
        $usuario->nombre='Robert';
        $usuario->password=hash_hmac('bcrypt','secret');
        $usuario->apellidoP='Castro';
        $usuario->apellidoM='Ramirez';
        $usuario->telefono='44881631';
        $usuario->correoElectronico='example@example.com';
        $usuario->nombreDeUsuario='sentry';
        $usuario->tipoDeUsuario='medico';
        $usuario->save();
    }
}

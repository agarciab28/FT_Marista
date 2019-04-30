<?php

use Illuminate\Database\Seeder;
use  \App\usuario;
class admin extends Seeder
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
        $usuario->id='1';
        $usuario->curp='xxxxyxyxyxyxyxyxxx';
        $usuario->nombre='Pancho';
        $usuario->password=hash_hmac('bcrypt','secret');
        $usuario->apellidoP='Pantera';
        $usuario->apellidoM='Quick';
        $usuario->telefono='44881631';
        $usuario->correoElectronico='example@example.com';
        $usuario->nombreDeUsuario='Campeon';
        $usuario->tipoDeUsuario='administrador';
        $usuario->save();
  
    }
}

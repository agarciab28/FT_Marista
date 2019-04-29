<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id',30);
            $table->string('curp',30);
            $table->string('nombre',70)->nullable();
            $table->text('password');
            $table->string('apellidoP',45)->nullable();
            $table->string('apellidoM',45)->nullable();
            $table->string('telefono',15);
            $table->string('correoElectronico',70)->nullable();
            $table->string('nombreDeUsuario',45);
            $table->string('tipoDeUsuario', 50)->nullable();
            $table->text('cedulaProfesional')->nullable();
            $table->text('cedulaMoE')->nullable();
            $table->string('updated_at', 20);
            $table->string('created_at', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}

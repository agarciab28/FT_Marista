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
            $table->string('curp',30)->primary();
            $table->string('nombre',70)->nullable();
            $table->string('password',45);
            $table->integer('tipo')->unsigned();
            $table->string('apellidoP',45)->nullable();
            $table->string('apellidoM',45)->nullable();
            $table->integer('telefono')->unsigned();
            $table->string('correoElectronico',70)->nullable();
            $table->string('nombreDeUsuario',45);
            $table->integer('tipoDeUsuario')->unsigned();
            $table->text('cedulaProfesional')->nullable();
            $table->text('cedulaMoE')->nullable();
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

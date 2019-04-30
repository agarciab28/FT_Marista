<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FichaDeIdentificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_de_identificacion', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->string('curp',30)->primary();
            $table->string('nombre',70);
            $table->string('apellidoP',45);
            $table->string('apellidoM',45)->nullable();
            $table->integer('edad')->unsigned();
            $table->enum('sexo',['M','F'])->nullable();
            $table->string('nacionalidad',45);
            $table->enum('estadoCivil',['S','C'])->nullable();
            $table->string('ocupacion',45);
            $table->string('calle',30)->nullable();
            $table->string('num_int',20)->nullable();
            $table->string('num_ext',20)->nullable();
            $table->string('colonia',50)->nullable();
            $table->string('ciudad',30)->nullable();
            $table->string('estado',30)->nullable();
            $table->string('telTrabajo',15);
            $table->string('celular',15);
            $table->string('religion',45);
            $table->string('familiaAC',45);
            $table->string('celAC',15);
            $table->text('motivoDeConsulta');
            $table->string('updated_at', 20);
            $table->string('created_at', 20);


            Schema::enableForeignKeyConstraints();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('ficha_de_identificacion');
    }
}

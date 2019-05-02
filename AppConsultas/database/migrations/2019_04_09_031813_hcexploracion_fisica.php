<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HcexploracionFisica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcexploracionfisica', function (Blueprint $table) {
            $table->increments('id_hcexploracionfisica',10);
            $table->float('ta')->nullable();
            $table->float('fc')->nullable();
            $table->float('fr')->nullable();
            $table->float('temp')->nullable();
            $table->float('talla')->nullable();
            $table->float('s02')->nullable();
            $table->float('pesoactual')->nullable();
            $table->float('pesoanterior')->nullable();
            $table->float('pesoideal')->nullable();
            $table->float('imc')->nullable();
            $table->integer('id_f')->unsigned();
            $table->foreign('id_f')->references('id_ficha')->on('ficha_de_identificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('hcexploracionfisica');
    }
}

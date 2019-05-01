<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcpadeactual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcpadecimientoactual', function (Blueprint $table) {
            $table->increments('id_hcpadecimientoactual',10);
            $table->text('inicio')->nullable();
            $table->text('evolucion')->nullable();
            $table->text('actual')->nullable();
            $table->string('curp',30);
            $table->foreign('curp')->references('curp')->on('ficha_de_identificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('hcpadecimientoactual');
    }
}

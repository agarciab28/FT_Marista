<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcapp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcapp', function (Blueprint $table) {
            $table->increments('id_hcapp',10);
            $table->text('tipoconstruccionnf')->nullable();
            $table->text('suelonoregular')->nullable();
            $table->text('escalaresda')->nullable();
            $table->text('ventilacionina')->nullable();
            $table->text('hacinamiento')->nullable();
            $table->text('adaptacionesyaux')->nullable();
            $table->text('serviciosdeagua')->nullable();
            $table->text('serviciosdeluz')->nullable();
            $table->text('serviciosd')->nullable();
            $table->text('habitospersonalesb')->nullable();
            $table->text('higienebucal')->nullable();
            $table->text('defecacion')->nullable();
            $table->text('tabaquismo')->nullable();
            $table->text('alcoholismo')->nullable();
            $table->text('toxicomanias')->nullable();
            $table->text('alimentacion')->nullable();
            $table->text('inmunizaciones')->nullable();
            $table->text('trabajodescanso')->nullable();
            $table->text('pasatiempo')->nullable();
            $table->text('deporte')->nullable();
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
        Schema::dropIfExists('hcapp');
    }
}

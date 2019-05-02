<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HctipoDeMarcha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hctipoDeMarcha', function (Blueprint $table) {
            $table->increments('id_tipoDeMarcha',10);
            $table->text('hemipareticaHemiplejica')->nullable();
            $table->text('cerebelosaAtáxica')->nullable();
            $table->text('paraparetica')->nullable();
            $table->text('hipocineticaParkinsoniana')->nullable();
            $table->text('vestibular')->nullable();
            $table->text('marchaCoreas')->nullable();
            $table->text('marchaSensorial')->nullable();
            $table->text('marchaMiopatias')->nullable();
            $table->text('marchaHisterica')->nullable();
            $table->integer('id_f')->unsigned();
            $table->foreign('id_f')->references('id_ficha')->on('ficha_de_identificacion');
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
        Schema::dropIfExists('hcTipoDeMarcha');
    }
}

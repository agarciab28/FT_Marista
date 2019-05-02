<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcapnp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcapnp', function (Blueprint $table) {
            $table->increments('id_hcapnp',10);
            $table->text('eninin')->nullable();
            $table->text('intervencionesq')->nullable();
            $table->text('traumatismos')->nullable();
            $table->text('infiltraciones')->nullable();
            $table->text('hospitalizaciones')->nullable();
            $table->text('perdidadeconocimiento')->nullable();
            $table->text('intoleranciamed')->nullable();
            $table->text('transfusiones')->nullable();
            $table->text('medicamentos')->nullable();
            $table->text('ta_ets')->nullable();
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
        Schema::dropIfExists('hcapnp');
    }
}

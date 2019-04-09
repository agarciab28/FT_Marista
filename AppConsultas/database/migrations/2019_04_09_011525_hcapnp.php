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
        Schema::dropIfExists('id_hcapnp');
    }
}

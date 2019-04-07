<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcsintomasgenerales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcsintomasgenerales', function (Blueprint $table) {
            $table->increments('id_hcsintomasgenerales',10);
            $table->text('astonia')->nullable();
            $table->text('adinamia')->nullable();
            $table->text('anorexia')->nullable();
            $table->text('fiebre')->nullable();
            $table->text('perdidadepeso')->nullable();
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
        Schema::dropIfExists('hcsintomasgenerales');
    }
}

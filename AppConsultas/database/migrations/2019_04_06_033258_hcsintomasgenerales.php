id_ficha<?php

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
            $table->text('astenia')->nullable();
            $table->text('adinamia')->nullable();
            $table->text('anorexia')->nullable();
            $table->text('fiebre')->nullable();
            $table->text('perdidadepeso')->nullable();
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

        Schema::dropIfExists('hcsintomasgenerales');
    }
}

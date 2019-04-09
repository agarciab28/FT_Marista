<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HcexploracionGeneral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcexploraciongeneral', function (Blueprint $table) {
            $table->increments('id_hcexploraciongeneral',10);
            $table->text('estadodecon')->nullable();
            $table->text('actitud')->nullable();
            $table->text('movimientosanormales')->nullable();
            $table->text('postura')->nullable();
            $table->text('marcha')->nullable();
            $table->text('estadogdn')->nullable();
            $table->text('fuerzamuscular')->nullable();
            $table->text('pruebasfuncionales')->nullable();
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
        Schema::dropIfExists('hcexploraciongeneral');
    }
}

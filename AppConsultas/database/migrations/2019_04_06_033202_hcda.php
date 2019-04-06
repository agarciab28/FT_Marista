<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcda', function (Blueprint $table) {
            $table->increments('id_hcda',10);
            $table->text('diagant')->nullable();
            $table->text('estudiog')->nullable();
            $table->text('tratamientosant')->nullable();
            $table->text('inquietudsub')->nullable();
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
        Schema::dropIfExists('hcda');
    }
}

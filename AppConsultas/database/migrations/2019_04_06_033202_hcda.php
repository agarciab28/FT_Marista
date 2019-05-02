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
        Schema::dropIfExists('hcda');
    }
}

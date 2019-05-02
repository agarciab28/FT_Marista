<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcarcodemovimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcarcodemovimiento', function (Blueprint $table) {
            $table->increments('id_hcarcodemovimiento',10);
            $table->text('datos')->nullable();
            $table->integer('id_f')->unsigned();
            $table->foreign('id_f')->references('id_ficha')->on('ficha_de_identificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('hcarcodemovimiento');
    }
}

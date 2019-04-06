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
        Schema::dropIfExists('hcarcodemovimiento');
    }
}

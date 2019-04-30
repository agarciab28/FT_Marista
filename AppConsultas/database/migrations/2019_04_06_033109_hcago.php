<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcago', function (Blueprint $table) {
            $table->increments('id_hcago',10);
            $table->text('menarca')->nullable();
            $table->text('ritmomenstrual')->nullable();
            $table->text('partos')->nullable();
            $table->text('abortos')->nullable();
            $table->text('cesareas')->nullable();
            $table->text('metodoanticoncept')->nullable();
            $table->text('fum')->nullable();
            $table->text('ivsa')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('hcago');
    }
}

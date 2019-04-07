<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hchf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hchf', function (Blueprint $table) {
            $table->increments('id_hchf',10);
            $table->text('enfermedadesreumatologicas')->nullable();
            $table->text('enfermadessn')->nullable();
            $table->text('sindromes')->nullable();
            $table->text('malformaciones')->nullable();
            $table->text('congenitas')->nullable();
            $table->text('diabetes')->nullable();
            $table->text('hipertensionas')->nullable();
            $table->text('cancer')->nullable();
            $table->text('cardiopatias')->nullable();
            $table->text('vasculares')->nullable();
            $table->text('pulmonares')->nullable();
            $table->text('heptopatias')->nullable();
            $table->text('nefropatias')->nullable();
            $table->text('digestivos')->nullable();
            $table->text('endrocrinopatias')->nullable();
            $table->text('transtornosh')->nullable();
            $table->text('dislipidemias')->nullable();
            $table->text('otros')->nullable();
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
        Schema::dropIfExists('hchf');
    }
}

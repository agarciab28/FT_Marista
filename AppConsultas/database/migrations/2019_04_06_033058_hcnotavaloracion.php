<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcnotavaloracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcnotavaloracion', function (Blueprint $table) {
            $table->increments('id_hcnotavaloracion',10);
            $table->date('fecha');
            $table->text('eva')->nullable();
            $table->text('pruebasf')->nullable();
            $table->text('actividadf')->nullable();
            $table->text('fuerza')->nullable();
            $table->text('rom')->nullable();
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

        Schema::dropIfExists('hcnotavaloracion');
    }
}

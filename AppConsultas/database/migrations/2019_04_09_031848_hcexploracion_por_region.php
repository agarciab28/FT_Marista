<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HcexploracionPorRegion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcexploracionporregion', function (Blueprint $table) {
            $table->increments('id_hcexploracionporregion',10);
            $table->text('pielyanexo')->nullable();
            $table->text('cabeza')->nullable();
            $table->text('ojos')->nullable();
            $table->text('oidos')->nullable();
            $table->text('narizyseno')->nullable();
            $table->text('boca')->nullable();
            $table->text('torax')->nullable();
            $table->text('vasossanguineos')->nullable();
            $table->text('mamas')->nullable();
            $table->text('genitales')->nullable();
            $table->text('abdomen')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('hcexploracionporregion');
    }
}

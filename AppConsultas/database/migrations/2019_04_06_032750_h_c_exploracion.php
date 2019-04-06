<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HCExploracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcexploracion', function (Blueprint $table) {
            $table->increments('id_exploracion',10);
            $table->text('expf')->nullable();
            $table->text('expgeneral')->nullable();
            $table->text('exploracionporregion')->nullable();
            $table->text('expgeneral')->nullable();
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
        Schema::dropIfExists('hcexploracion');
    }
}

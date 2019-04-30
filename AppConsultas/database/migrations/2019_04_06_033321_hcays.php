<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcays', function (Blueprint $table) {
            $table->increments('id_hcays',10);
            $table->text('aparatodigestivo')->nullable();
            $table->text('aparatocardiovas')->nullable();
            $table->text('aparatorespiratorio')->nullable();
            $table->text('aparatourinario')->nullable();
            $table->text('aparatogenital')->nullable();
            $table->text('aparatohematologico')->nullable();
            $table->text('aparatoendocrino')->nullable();
            $table->text('aparatonervioso')->nullable();
            $table->text('aparatosensorial')->nullable();
            $table->text('aparatoosteomuscu')->nullable();
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
        Schema::dropIfExists('hcays');
    }
}

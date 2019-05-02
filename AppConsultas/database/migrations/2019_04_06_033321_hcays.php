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

        Schema::dropIfExists('hcays');
    }
}

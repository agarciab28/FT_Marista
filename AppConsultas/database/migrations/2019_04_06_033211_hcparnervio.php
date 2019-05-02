<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcparnervio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcparnervio', function (Blueprint $table) {
            $table->increments('id_hcparnervio',10);
            $table->text('parte')->nullable();
            $table->text('escaladeashworth')->nullable();
            $table->text('reflejososteo')->nullable();
            $table->text('tipodemarcha')->nullable();
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
        Schema::dropIfExists('hcparnervio');
    }
}

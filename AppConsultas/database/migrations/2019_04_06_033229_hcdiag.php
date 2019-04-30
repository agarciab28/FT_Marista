<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hcdiag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcdiag', function (Blueprint $table) {
            $table->increments('id_hcdiag',10);
            $table->text('diagnostico')->nullable();
            $table->text('pronostico')->nullable();
            $table->text('objetivos')->nullable();
            $table->text('planfisioterapeutico')->nullable();
            $table->text('dermatomasmpc')->nullable();
            $table->text('mapadeldolor')->nullable();
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
        Schema::dropIfExists('hcdiag');
    }
}

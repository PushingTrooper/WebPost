<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerdorues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Perdorues', function (Blueprint $table) {
            $table->id('perdorues_id');
            $table->integer('magazine_id');
            $table->integer('rol_id');
            $table->integer('qytet_id');
            $table->string('email');
            $table->string('emri');
            $table->string('mbiemri');
            $table->integer('paga');
            $table->text('foto_profili');
            $table->text('adrese');
            $table->integer('latitude');
            $table->integer('longitude');
            $table->boolean('kerkuar_ndryshim_fjalekalimi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Perdorues');
    }
}

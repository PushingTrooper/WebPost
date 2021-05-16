<?php

use App\Models\HistorikPorosi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorikPorosi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("historik_porosis", function (Blueprint $table) {
            $table->id("status_porosi_id");
            $table->integer("status_id");
            $table->integer("magazine_id");
            $table->integer("perdorues_id");
            $table->dateTime('data_krijimit');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
        /*SQL CREATE TABLE historik_porosis(
            status_porosi_id INT NOT NULL,
            status_id INT,
            magazine_id INT,
            data_krijimit DATETIME,
            PRIMARY KEY(status_porosi_id)
        )*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HistorikPorosi');
    }
}

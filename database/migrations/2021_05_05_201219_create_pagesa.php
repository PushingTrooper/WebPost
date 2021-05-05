<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pagesa', function (Blueprint $table) {
            $table->id('pagese_id');
            $table->integer('shuma');
            $table->boolean('kryer');
            $table->boolean('nga_derguesi');
            $table->dateTime('data_pagimit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pagesa');
    }
}

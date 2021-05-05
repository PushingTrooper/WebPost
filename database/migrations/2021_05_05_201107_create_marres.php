<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Marres', function (Blueprint $table) {
            $table->id('marres_id');
            $table->integer('qytet_id');
            $table->string('emer');
            $table->string('mbiemer');
            $table->string('adrese');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Marres');
    }
}

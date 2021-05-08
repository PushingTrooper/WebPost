<?php

use App\Models\Porosi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePorosi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porosis', function (Blueprint $table) {
            $table->id('porosi_id');
            $table->integer('status_porosi_id');
            $table->integer('pagese_id');
            $table->integer('marres_id');
            $table->integer('gjurmim_id');
            $table->enum('tipi', ["paketë", "letër"]);
            $table->enum('tipi_dergeses', ["normal", "ekspres"]);
            $table->text('koment');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Porosi');
    }
}

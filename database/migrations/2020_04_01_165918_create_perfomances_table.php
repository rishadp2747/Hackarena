<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfomancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfomances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('challenge_id')->unsigned();

            $table->bigInteger('user_id')->unsigned();

            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->foreign('challenge_id')->references('id')->on('challenges');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfomances');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('challenge_id');
            $table->foreign('challenge_id')->references('id')->on('challenges');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performances');
    }
}

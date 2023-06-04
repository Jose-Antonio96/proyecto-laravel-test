<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelUserTable extends Migration
{
    public function up()
    {
        Schema::create('travel_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('travel_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->unique(['travel_id', 'user_id']);

            $table->foreign('travel_id')->references('id')->on('travels')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('travel_user');
    }
}

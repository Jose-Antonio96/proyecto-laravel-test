<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usertravel', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id',);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('travel_id',);
            $table->foreign('travel_id')->references('id')->on('travels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usertravel');
    }
};

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
    Schema::create('tag_travel', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('travel_id');
        $table->unsignedBigInteger('tag_id');
        $table->timestamps();

        $table->foreign('travel_id')->references('id')->on('travels')->onDelete('cascade');
        $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
    });
}

public function down()
    {
        Schema::dropIfExists('tag_travel');
    }

};

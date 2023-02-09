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
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->text('description', 500);
            $table->timestamps();
            $table->boolean('sponsored')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('starts')->nullable();
            $table->timestamp('finishes')->nullable();
            $table->string('tags_id')->nullable();
            $table->string('price', 12)->nullable();
            $table->string('organizer', 60)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
};

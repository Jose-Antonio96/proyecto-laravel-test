<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

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

            $table->foreignIdFor(User::class)->nullable();

            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('set null');

            $table->string('name',100);
            $table->string('location', 40 ); 
            $table->longText('description');
            $table->boolean('sponsored');
            $table->string('image')->nullable();
            $table->timestamp('starts')->nullable();
            $table->timestamp('finishes')->nullable();
            
            $table->boolean('professional');
            $table->string('price', 12)->nullable();
            $table->string('organizer', 60);
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('travels');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //La propia migracion te lo reconoce como integer autoincrement
            $table->string('name',50);
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->bigInteger('phone_number')->unique();
            $table->boolean('administrator');
            $table->string('image')->nullable();
            $table->string('PostalCode', 10);
            $table->string('Address', 30);
            $table->bigInteger('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

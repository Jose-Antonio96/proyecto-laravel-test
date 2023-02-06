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
            $table->timestamps();
        });
    }
    $table->id();
            //La propia migracion te lo reconoce como integer autoincrement
            $table->string('name',50);
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('image')->nullable();
            $table->string('PostalCode', 10);
            $table->string('Address');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

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

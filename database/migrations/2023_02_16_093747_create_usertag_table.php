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
        Schema::create('usertag', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id',);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
            //Las foreign keys aplican restricciones de datos
            // SQLSTATE[HY000]: General error: 3780 Referencing column 'user_id' and referenced column 'id' 
        //in foreign key constraint 'usertag_user_id_foreign' are incompatible. (SQL: alter table `usertag`
         //add constraint `usertag_user_id_foreign` foreign key (`user_id`) references `users` (`id`))
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usertag');
    }
};

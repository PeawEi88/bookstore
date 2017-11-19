<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Member extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('member', function (Blueprint $table) {
            $table->increments('memberID')->unsigned();
            $table->integer('memberCODE');
            $table->string('first_name', 150);
            $table->string('last_name', 150);
            $table->string('birth_date', 150);
            $table->string('email', 150)->unique();
            $table->string('gender', 150);
            $table->integer('mobile');
            $table->string('profile_image', 150);
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
        Schema::dropIfExists('member');
    }
}

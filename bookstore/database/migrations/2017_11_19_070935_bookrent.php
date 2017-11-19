<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bookrent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bookrent', function (Blueprint $table) {
            $table->increments('bookrentID');
            $table->integer('bookID')->unsigned();
            $table->foreign('bookID')->references('bookID')->on('book');
            $table->integer('memberID')->unsigned();
            $table->foreign('memberID')->references('memberID')->on('member');
            $table->dateTime('rent_date');
            $table->dateTime('return_date');
            $table->string('status', 150);
            $table->integer('total_cost');
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
        Schema::dropIfExists('bookrent');
    }
}

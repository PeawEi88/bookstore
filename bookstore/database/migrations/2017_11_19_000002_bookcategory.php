<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bookcategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookscategory', function (Blueprint $table) {
            $table->increments('bookcategoryID')->unsigned(); //รหสัหนงัสือ
            $table->string('bookcategoryNAME', 150); //ชือหนงัสือ
            $table->integer('bookcategoryTAG'); //จำนวนหนังสือ
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
        Schema::dropIfExists('bookcategory');
    }
}

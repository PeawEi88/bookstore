<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bookdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookdetail', function (Blueprint $table) {
            $table->increments('bookdetailID')->unsigned(); //รหสัประเภทหนงัสือ
            $table->string('title', 150); //รายละเอียดประเภทหนงัสือ
            $table->integer('bookcategoryID')->unsigned();
            $table->foreign('bookcategoryID')->references('bookcategoryID')->on('bookscategory');
            $table->integer('authorID')->unsigned();
            $table->foreign('authorID')->references('authorID')->on('author');
            $table->string('price_per_day', 150);
            $table->string('description', 150);
            $table->string('cover_image', 150);
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
        Schema::dropIfExists('bookdetail');
    }
}

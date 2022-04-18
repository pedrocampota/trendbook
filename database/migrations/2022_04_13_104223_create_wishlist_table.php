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
        //this is a backup of create table settings
        //$table->increments('id');
        //$table->integer('user_id')->unsigned();
        //$table->integer('book_id')->unsigned();

        Schema::create('wishlist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('book_id');
            $table->timestamps();
        });

        Schema::table('wishlist', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wishlist');
    }
};

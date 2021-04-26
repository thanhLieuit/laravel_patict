<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaivietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_baiviet');
            $table->string('image');
            $table->string('noidung');
            $table->string('tomtat');
            $table->string('slug');
            $table->string('note');
            $table->integer('id_user')->unsigned();
            $table->integer('id_menu_baiviet')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_menu_baiviet')->references('id')->on('menu_baiviets')->onDelete('cascade');
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
        Schema::dropIfExists('baiviet');
    }
}

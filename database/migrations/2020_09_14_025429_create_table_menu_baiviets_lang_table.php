<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuBaivietsLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_baiviets_lang', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_menu_baiviet');
            $table->string('slug');
            $table->string('note')->nullable();
            $table->integer('id_lang')->unsigned();
            $table->foreign('id_lang')->references('id')->on('languages')->onDelete('cascade');
            $table->integer('id_menu_baiviets')->unsigned();
            $table->foreign('id_menu_baiviets')->references('id')->on('menu_baiviets')->onDelete('cascade');
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
        Schema::dropIfExists('menu_baiviets_lang');
    }
}

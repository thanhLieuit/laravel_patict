<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuConsLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_cons_lang', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('menu_con');
            $table->string('note');
            $table->integer('id_lang')->unsigned();
            $table->foreign('id_lang')->references('id')->on('languages')->onDelete('cascade');
            $table->integer('id_menu_cons')->unsigned();
            $table->foreign('id_menu_cons')->references('id')->on('menu_cons')->onDelete('cascade');
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
        Schema::dropIfExists('menu_cons_lang');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuConsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_cons', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('menu_con');
            $table->string('image')->nullable();
            $table->string('note');
            $table->string('slug');
            $table->integer('id_menu_c1')->unsigned();
            $table->foreign('id_menu_c1')->references('id')->on('menus_c1')->onDelete('cascade');
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
        Schema::dropIfExists('menu_cons');
    }
}

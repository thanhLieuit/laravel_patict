<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBaivietsLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviets_lang', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_baiviet');
            $table->string('noidung');
            $table->string('tomtat');
            $table->string('slug');
            $table->string('note');
            $table->integer('id_lang')->unsigned();
            $table->foreign('id_lang')->references('id')->on('languages')->onDelete('cascade');
            $table->integer('id_baiviets')->unsigned();
            $table->foreign('id_baiviets')->references('id')->on('baiviets')->onDelete('cascade');
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
        Schema::dropIfExists('baiviets_lang');
    }
}

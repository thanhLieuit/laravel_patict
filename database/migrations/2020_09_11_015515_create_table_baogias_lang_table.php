<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBaogiasLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baogias_lang', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_baogia');
            $table->string('noidung');
            $table->integer('id_lang')->unsigned();
            $table->foreign('id_lang')->references('id')->on('languages')->onDelete('cascade');
            $table->integer('id_baogia')->unsigned();
            $table->foreign('id_baogia')->references('id')->on('baogias')->onDelete('cascade');
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
        Schema::dropIfExists('baogias_lang');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuyendungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyendungs', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('hoten');
            $table->String('email');
            $table->integer('phone');
            $table->String('vitri');
            $table->String('congcu');
            $table->string('kinhnghiem');
            $table->string('mongmuon');
            $table->string('muctieu');
            $table->string('lydo');
            $table->string('portfolio');
            $table->string('linkcv');
            $table->string('cauhoi');
            $table->string('note');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tuyendungs');
    }
}

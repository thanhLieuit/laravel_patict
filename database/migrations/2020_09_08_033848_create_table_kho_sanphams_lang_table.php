<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKhoSanphamsLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kho_sanphams_lang', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_sanpham');
            $table->string('noidung');
            $table->string('tomtat');
            $table->integer('id_lang')->unsigned();
            $table->foreign('id_lang')->references('id')->on('languages')->onDelete('cascade');
            $table->integer('id_khosanphams')->unsigned();
            $table->foreign('id_khosanphams')->references('id')->on('kho_sanphams')->onDelete('cascade');
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
        Schema::dropIfExists('kho_sanphams_lang');
    }
}

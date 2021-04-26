<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuKhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_khos', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_kho')->unsigned();
            $table->integer('id_menu_con')->unsigned();
            $table->foreign('id_kho')->references('id')->on('kho_sanphams')->onDelete('cascade');
            $table->foreign('id_menu_con')->references('id')->on('menu_cons')->onDelete('cascade');
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
        Schema::dropIfExists('menu_khos');
    }
}

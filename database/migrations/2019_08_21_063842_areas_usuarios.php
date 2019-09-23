<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AreasUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_usuarios_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('areas_usuarios_tbl', function($table) {
            $table->foreign('area_id')->references('id')->on('areas_tbl');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas_usuarios_tbl');
    }
}

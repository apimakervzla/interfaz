<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProyectosMinutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_minutas_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('proyecto_id')->unsigned();
            $table->bigInteger('minuta_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('proyectos_minutas_tbl', function($table) {            
            $table->foreign('proyecto_id')->references('id')->on('proyectos');            
            $table->foreign('minuta_id')->references('id')->on('minutas');            
            $table->foreign('user_id')->references('id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos_minutas_tbl');
    }
}

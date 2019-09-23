<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('nombre_proyecto');
            $table->mediumText('siglas_proyecto');
            $table->date('fecha_desde_proyecto');
            $table->date('fecha_hasta_proyecto');
            $table->bigInteger('metodologia_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('proyectos_tbl', function($table) {            
            $table->foreign('metodologia_id')->references('id')->on('metodologias_tbl');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos_tbl');
    }
}

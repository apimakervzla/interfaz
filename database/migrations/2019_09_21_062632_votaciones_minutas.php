<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VotacionesMinutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votaciones_minutas_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('minuta_id')->unsigned();
            $table->boolean('valoracion_votacion_minuta');            
            $table->timestamps();
        });
        Schema::table('votaciones_minutas_tbl', function($table) {            
            $table->foreign('minuta_id')->references('id')->on('minutas_tbl');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votaciones_minutas_tbl');
    }
}

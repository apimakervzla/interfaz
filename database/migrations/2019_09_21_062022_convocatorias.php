<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Convocatorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatorias_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('motivo_convocatoria');                               
            $table->timestamp('fecha_hora_convocatoria')->nullable();                        
            $table->bigInteger('convocatoria_id')->unsigned()->nullable();            
            $table->bigInteger('producto_servicio_id')->unsigned()->nullable; 
            $table->bigInteger('usuario_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('convocatorias_tbl', function($table) {            
            $table->foreign('convocatoria_id')->references('id')->on('convocatorias_tbl');
            $table->foreign('producto_servicio_id')->references('id')->on('productos_servicios_tbl');
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
        Schema::dropIfExists('convocatorias_tbl');
    }
}

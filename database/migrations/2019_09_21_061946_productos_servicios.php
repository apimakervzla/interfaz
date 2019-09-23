<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductosServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_servicios_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('codigo_producto_servicio');                      
            $table->bigInteger('usuario_id')->unsigned();            
            $table->timestamps();
        });
        Schema::table('productos_servicios_tbl', function($table) {            
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
        Schema::dropIfExists('productos_servicios_tbl');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('nombre_cliente');
            $table->mediumText('apellido_cliente');
            $table->mediumText('correo_cliente');
            $table->mediumText('telefono_contacto_cliente');
            $table->bigInteger('lugar_cliente_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('clientes_tbl', function($table) {
            $table->foreign('lugar_cliente_id')->references('id')->on('lugares_clientes_tbl');
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
        Schema::dropIfExists('clientes_tbl');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('cliente_id');
      //      $table->unsignedInteger('articulo_id');
            $table->DateTime('fecha_realizada');
            $table->string('descripcion');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
          //  $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });

        Schema::create('producto_venta', function (Blueprint $table) {
          $table->unsignedInteger('producto_id');
          $table->unsignedInteger('venta_id');
          $table->integer('cantidad');
        //  $table->string('comentarios');

          $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
          $table->foreign('venta_id')->references('id')->on('ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}

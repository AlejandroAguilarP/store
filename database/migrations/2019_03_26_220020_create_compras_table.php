<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('proveedor_id');
          $table->unsignedInteger('articulo_id');
          $table->DateTime('fecha_realizada');
          $table->string('descripcion');
          $table->integer('total');
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('proveedor_id')->references('id')->on('proveedors');
          $table->foreign('articulo_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}

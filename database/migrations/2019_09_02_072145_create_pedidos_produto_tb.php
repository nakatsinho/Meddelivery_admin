<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosProdutoTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('farmacia_id')->nullable();
            $table->integer('tax');
            $table->integer('total');
            $table->integer('product_id');
            $table->integer('pedido_id');
            $table->integer('qty');
            
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
        Schema::dropIfExists('pedido_product');
    }
}

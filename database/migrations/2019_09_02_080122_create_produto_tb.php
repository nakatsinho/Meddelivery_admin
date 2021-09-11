<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('farmacia_id')->nullable();
            $table->string('nome_pro');
            $table->string('codigo_pro');
            $table->integer('preco_pro');
            $table->string('info_pro');
            $table->integer('category_id'); 
            $table->integer('subcategory_id'); 
            $table->string('image')->nullable();
            $table->integer('spl_price');
            $table->integer('tax');
            $table->integer('stock');
            $table->enum('status', ['1', '0'])->default('1');
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
        Schema::dropIfExists('produtos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmaciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('titular');
            $table->string('nuit');
            $table->string('email')->unique();
            $table->string('location');
            $table->string('number');
            $table->string('image')->nullable();
            $table->string('descricao');
            $table->string('email_verified_at')->nullable();
            $table->string('quarteirao');
            $table->integer('pais_id');
            $table->integer('provincia_id');
            $table->integer('bairro_id');
            $table->integer('user_id');
            $table->string('image_empresa')->nullable();
            $table->string('video_link');
            $table->enum('status', ['1', '0'])->default(0);
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
        Schema::dropIfExists('farmacias');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('farmacia_id')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('number');
            $table->string('sexo',100);
            $table->date('nascimento',100);
            $table->string('altura');
            $table->string('talta');
            $table->string('tbaixa');
            $table->string('profissao');
            $table->string('peso')->nullable();
            $table->string('raca')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->integer('pais_id')->nullable();
            $table->integer('doenca_id')->nullable();
            $table->integer('gsanguineo_id')->nullable();
            $table->integer('provincia_id')->nullable();
            $table->unsignedInteger('user_group_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

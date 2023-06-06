<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{

    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('cep');
            $table->string('data_inicio');
            $table->string('tipo');
            $table->integer('profissional_id');
            $table->boolean('e_online')->default(0);
            $table->boolean('usar_meu_cep')->default(0);
            $table->boolean('digitar_cep')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}

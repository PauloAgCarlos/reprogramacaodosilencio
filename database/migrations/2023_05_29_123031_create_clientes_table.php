<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('data_nascimento');
            $table->string('email');
            $table->integer('id_profissional');
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

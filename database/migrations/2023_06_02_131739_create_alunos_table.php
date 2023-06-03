<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{

    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('data_nascimento');
            $table->string('cpf');
            $table->string('rg');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('genero');
            $table->string('endereco_completo');
            $table->string('data_treinamento');
            $table->integer('aceita_colocar_lista_licenciado');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificadosTable extends Migration
{

    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->id();
            $table->integer('id_aluno');
            $table->integer('id_instrutor');
            $table->string('nome_treinamento');
            $table->string('data_conclusao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}

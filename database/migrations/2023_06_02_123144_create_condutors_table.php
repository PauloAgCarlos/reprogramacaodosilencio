<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condutors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('data_nascimento');
            $table->string('email');
            $table->string('cep');
            $table->string('rg');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('foto')->default('/images/sem-foto.jpg');
            $table->integer('usuario_id');
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
        Schema::dropIfExists('condutors');
    }
}

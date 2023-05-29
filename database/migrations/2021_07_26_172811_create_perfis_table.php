<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfis', function (Blueprint $table) {
            $table->id();
            $table->integer("estudante_id")->unsigned();
            $table->timestamps();


            $table->foreign('estudante_id')->references('id')->on('estudantes');

        });
    }


    public function down()
    {
        Schema::dropIfExists('perfis');
    }
}

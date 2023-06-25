<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeedsTable extends Migration
{

    public function up()
    {
        Schema::create('seeds', function (Blueprint $table) {
            $table->increments('id');
            $table->text('links');
            $table->string('tema_principal');
            $table->string('sips');
            $table->string('outras_palavras');
            $table->integer('id_cliente');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seeds');
    }
}

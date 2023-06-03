<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeedsFavoritosTable extends Migration
{

    
    public function up()
    {
        Schema::create('seeds_favoritos', function (Blueprint $table) {
            $table->id();
            $table->integer('profissional_id');
            $table->integer('seed_id');
            $table->integer('cliente_id');
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
        Schema::dropIfExists('seeds_favoritos');
    }
}

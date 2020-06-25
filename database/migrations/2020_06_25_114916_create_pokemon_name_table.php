<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_name', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('base_experience');
            $table->integer('height');
            $table->integer('weight');
            $table->boolean('is_default');
            $table->string('sprites', 100);
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
        Schema::dropIfExists('pokemon_name');
    }
}

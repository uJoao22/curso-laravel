<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) { //Cria a tabela chamada events
            $table->id(); //Adiciona a chave primaria
            $table->timestamps();
            $table->string('title'); //Adiciona uma coluna de string chamada title
            $table->text('description'); //Adiciona uma coluna de text chamada description
            $table->string('city'); //Adiciona uma coluna de string chamada city
            $table->boolean('private'); //Adiciona uma coluna booleana chamada private
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

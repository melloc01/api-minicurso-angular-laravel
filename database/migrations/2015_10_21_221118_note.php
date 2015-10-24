<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Note extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            
            // cria uma coluna autoincrementada
            $table->increments('id');

            // cria uma coluna tipo string, nulável
            $table->string('title')->nullable();

            // cria uma coluna tipo texto, não nulável 
            $table->text('text');

            // cria as colunas created_at e updated_at
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
        // "deleta" a tabela
        Schema::drop('note');
    }
}

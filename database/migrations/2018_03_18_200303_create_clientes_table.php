<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('genero')->nullable();
            $table->date('dataNascimento')->nullable();
            $table->string('cpf');
            $table->string('rg')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone1');
            $table->string('telefone2')->nullable();
            $table->string('telefone3')->nullable();
            $table->integer('situacao')->default('1');
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
        Schema::dropIfExists('clientes');
    }
}

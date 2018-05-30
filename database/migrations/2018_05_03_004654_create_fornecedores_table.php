<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razaoSocial');
            $table->string('nomeFantasia');
            $table->string('cnpj');
            $table->integer('tipoPessoa');
            $table->integer('inscricaoEstadual');
            $table->string('representante1');
            $table->string('representante2');
            $table->string('telefone1');
            $table->string('telefone2')->nullable();
            $table->string('email')->nullable();
            $table->string('site')->nullable();
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
        Schema::dropIfExists('fornecedores');
    }
}

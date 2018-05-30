<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeProduto');
            $table->string('nomeResumido');
            $table->string('codBarras');
            $table->string('marca');
            $table->string('fabricante');
            
            $table->string('estoqueAtual');
            $table->string('estoqueMinimo');
            $table->string('estoqueMaximo');

            $table->string('localizacao');

            $table->string('fornecedor');

            $table->string('grupo');

            $table->double('custo', 15, 8);
            $table->double('comissaoProduto', 15, 8);
            $table->double('precoFinal', 15, 8);

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
        Schema::dropIfExists('produtos');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'Produtos';

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = [
    	'nomeProduto',
        'nomeResumido',
        'codBarras',
        'marca',
        'fabricante',
        'estoqueAtual',
        'estoqueMinimo',
    	'estoqueMaximo',
        'localizacao',
        'fornecedor',
        'custo',
        'comissaoProduto',
        'custo'
    ];
}

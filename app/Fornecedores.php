<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    protected $table = 'Fornecedores';

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = [
    	'razaoSocial',
        'nomeFantasia',
        'cnpj',
        'tipoPessoa',
        'inscricaoEstadual',
        'representante1',
        'representante2',
    	'telefone1',
        'telefone2',
        'email',
        'site'
    ];
}

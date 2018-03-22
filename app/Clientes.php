<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
	protected $table = 'Clientes';

    protected $fillable = [
    	'nome',
        'cpf',
        'rg',
    	'dataNascimento',
    	'telefone1',
        'telefone2',
    	'email'
    ];
}

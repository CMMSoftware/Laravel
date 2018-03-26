<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
	protected $table = 'Clientes';

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = [
    	'nome',
        'genero',
        'dataNascimento',
        'cpf',
        'rg',
        'email',
    	'telefone1',
        'telefone2',
        'telefone3'
    ];

    public function endereco() {
        return $this->hasOne(Endereco::class, 'clienteId','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'Endereco';

    protected $primaryKey = "clienteId";

    public $incrementing = false;

    protected $fillable = [
    	'endereco',
        'bairro',
        'numero',
        'cidade',
        'estado',
        'cep'
    ];

    public function Clientes() {
        return $this->belongsOne(Clientes::class, 'clienteId','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $table = 'Vendas';

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = [
    	
    ];
}

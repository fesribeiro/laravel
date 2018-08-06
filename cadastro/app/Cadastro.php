<?php

namespace cadastro;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
	protected $table = 'cadastro';
    //

	public $timestamps = false;

    protected $fillable = array('nome', 'endereco' ,'telefone', 'CPF', 'dtnascimento');
}

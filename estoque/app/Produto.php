<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{		
	// Colocar o nome da tabela
	protected $table = 'produtos';

	// tirar o timestamps por padrão do eloquent
	public $timestamps = false;

    // Requests que podem vim em massa (all())
    protected $fillable = array('nome', 'descricao', 'quantidade', 'valor');
}

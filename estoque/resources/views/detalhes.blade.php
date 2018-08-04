@extends('principal')


@section('conteudo')
	<div class="container">
		<h1>Detalhes do produto <?= $p->nome?></h1>	

		<ul>
			<li>
				<b>Valor:</b>  {{$p->valor}}
			</li>
			<li>
				<b>Descrição:</b>   {{$p->descricao}}
			</li>
			<li>					               <!--  or 'Colocar a descrição caso o objeto $p for nulo'-->
				<b>quantidade em estoque:</b>  {{$p->quantidade}} 
			</li>
		</ul>

	</div>

@stop
@extends('principal')


@section('conteudo')
	<div class="container">
		<h1>Listagem de produtos</h1>	
		<table class="table table-striped table-bordered table-hover">

		 @foreach ($produtos as $p)
				<tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
						<td>{{$p->nome}}</td>
						<td>{{$p->valor}}</td>
						<td>{{$p->descricao}} </td>
						<td>{{$p->quantidade}} </td>
						<td>
							<a href="/produtos/mostra?id=<?=$p->id?>">Vizualizar</a>
						</td>

				</tr>
		@endforeach
		</table>

		<button type="button" class="btn btn-dark"><a href="/produtos/inserirProdutos">Inserir um produto</a></button>
		

	</div>
@stop
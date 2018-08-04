@extends('layout.principal')


@section('conteudo')


	<div class="container">

		<table class="table table-striped table-bordered table-hover">


			<tr>
						<td>Nome</td>
						<td>Valor</td>
						<td>Descrição</td>
						<td>Quantidade</td>
						<td>Vizualização</td>
		
				</tr>

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


		<button type="button" class="btn btn-dark"><a href="/produtos/novo">Inserir um produto</a></button>
		

	</div>



@stop
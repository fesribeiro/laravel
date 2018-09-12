@extends('layout.principal')

<div class='alert alert-danger'>

<ul>
		@foreach($errors->all() as $error)
	<li>{{$error}}</li>
		@endforeach
</ul>
</div>


@section('conteudo')

		<form method="POST" action="/produtos/adiciona">		

			<input type="hidden" value="{{csrf_token()}}" name="_token" />

			<div class="container">

				<h2>Preencha os campos abaixo para inserir um produto</h2>

				<div class="form-group row">
					 <label class="col-2 col-form-label">Nome do produto:</label>
					 <div class="col-3">
					    <input class="form-control" type="text"  name="nome" placeholder="Nome do produto...">
					 </div>
				</div>
				
				<div class="form-group row">
				  <label class="col-2 col-form-label">Valor do produto:</label>
				  <div class="col-3">
				    <input class="form-control" type="number" name="valor" placeholder="Valor do produto">
				  </div>
				</div>

				<div class="form-group">
    				<label>Descrição:</label>
    				<div class="col-5">
    				<textarea class="form-control" name="descricao" rows="3"></textarea>
    				</div>
  			</div>

				
				<div class="form-group row">
				  <label class="col-2 col-form-label">quantidade:</label>
				  <div class="col-3">
				    <input class="form-control" type="number" name="quantidade" placeholder="Quantidade...">
				  </div>
				</div>

				<div class="form-group row">
				  <label class="col-2 col-form-label">Tamanho:</label>
				  <div class="col-3">
				    <input class="form-control" type="text" name="tamanho" placeholder="Tamanho...">
				  </div>
				</div>


		
			
				<button type="submit" class="btn btn-primary">Adicionar</button>


			

			</div>

		</form>

@stop

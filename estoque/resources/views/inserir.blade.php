@extends('principal')


@section('conteudo')

		<form method="POST">		

			<div class="container">

				<h2>Preencha os campos abaixo para inserir um produto</h2>

				<div class="form-group row">
					 <label class="col-2 col-form-label">Nome do produto:</label>
					 <div class="col-3">
					    <input class="form-control" type="text" placeholder="Nome do produto..." name="nomeProduto">
					 </div>
				</div>
				
				<div class="form-group row">
				  <label class="col-2 col-form-label">Valor do produto:</label>
				  <div class="col-3">
				    <input class="form-control" type="number" placeholder="Valor do produto">
				  </div>
				</div>

				<div class="form-group">
    				<label>Descrição:</label>
    				<div class="col-5">
    				<textarea class="form-control" rows="3"></textarea>
    				</div>
  				</div>

				<div class="form-group row">
				  <label class="col-2 col-form-label">quantidade:</label>
				  <div class="col-3">
				    <input class="form-control" type="number" placeholder="Quantidade...">
				  </div>
				</div>

		
			
				<button type="submit" class="btn btn-default">Submit</button>


			

			</div>

		</form>

@stop

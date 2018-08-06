@extends('layout.principal')


@section('conteudo')
<form method="POST" action="/adicionar">		

			<input type="hidden" value="{{csrf_token()}}" name="_token" />
			
			<div class="container">

				<h2>Preencha os campos abaixo para inserir um produto</h2>

				<div class="form-group row">
					 <label class="col-2 col-form-label">Nome do aluno:</label>
					 <div class="col-3">
					    <input class="form-control" type="text"  name="nomeAluno" placeholder="Digite o nome do aluno...">
					 </div>
				</div>
				
				<div class="form-group row">
				  <label class="col-2 col-form-label">CPF do aluno:</label>
				  <div class="col-3">
				    <input class="form-control" type="text" name="cpfAluno" placeholder="Digite o CPF do aluno...">
				  </div>
				</div>

				<div class="form-group row">
				  <label class="col-2 col-form-label">Telefone do aluno:</label>
				  <div class="col-3">
				    <input class="form-control" type="text" name="telefoneAluno" placeholder="Digite o telefone do aluno...">
				  </div>
				</div>

				<div class="form-group row">
				  <label class="col-2 col-form-label">Endereco do aluno:</label>
				  <div class="col-3">
				    <input class="form-control" type="text" name="enderecoAluno" placeholder="Digite o endereço do aluno...">
				  </div>
				</div>

				<div class="form-group row">
				  <label class="col-2 col-form-label">Data de nascimento do aluno</label>
				  <div class="col-3">
				    <input class="form-control" type="text" name="dtnascimentoAluno" placeholder="Digite a data de nascimento do aluno...">
				  </div>
				</div>
			
				<button type="submit" class="btn btn-primary">Adicionar</button>


			

			</div>

		</form>

@stop
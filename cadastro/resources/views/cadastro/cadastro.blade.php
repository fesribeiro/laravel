@extends('layout.principal')


@section('conteudo')

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" name="nomeAluno" placeholder="Digite o nome do aluno">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">CEP</label>
      <input type="text" class="form-control" name="cepAluno" placeholder="CEP do aluno">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Telefone</label>
    <input type="text" class="col-md-6 form-control" name="telefoneAluno" placeholder="Telefone do aluno">
  </div>
  <div class="form-group">
    <label for="inputAddress2">CPF</label>
    <input type="text" class="col-md-6 form-control" name="cpfAluno" placeholder="CPF">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Data de nascimento</label>
      <input type="text" class="form-control" name="dtnascimentoAluno" placeholder="Data de nascimento">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@stop
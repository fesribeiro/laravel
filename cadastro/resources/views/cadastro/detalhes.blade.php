@extends('layout.principal')


@section('conteudo')


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>  
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">Data de cadastro</th>
    </tr>
  </thead>
  <tbody>


    <tr>
      <th scope="row">{{$aluno->id}}</th>
      <td>{{$aluno->nome}}</td>
      <td>{{$aluno->CPF}}</td>
      <td>{{$aluno->endereco}}</td>
      <td>{{$aluno->telefone}}</td>
      <td>{{$aluno->dtnascimento}}</td>
      <td>{{$aluno->dtcadastro}}</td>
    </tr>
   
  </tbody>
</table>

<button class="btn btn-dark"> <a href="/">Voltar</a></button>

@stop
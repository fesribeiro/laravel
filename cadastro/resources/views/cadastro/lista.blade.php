@extends('layout.principal')


@section('conteudo')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>  
      <th scope="col">Mais</th>
    </tr>
  </thead>
  <tbody>

    @foreach($cadastrados as $cadastrado)
    <tr>
      <th scope="row">{{$cadastrado->id}}</th>
      <td>{{$cadastrado->nome}}</td>
      <td>{{$cadastrado->CPF}}</td>
      <td><a href="/detalhes/{{$cadastrado->id}}">Detalhes</a></td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop
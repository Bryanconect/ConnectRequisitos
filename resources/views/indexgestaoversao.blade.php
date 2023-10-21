@extends('templates.template')

@section('content')

@php
$uservalidation = auth()->user()->tipo;
$userelicitacao = auth()->user()->id;
@endphp

<div class="text-center mt-3 mb-4">


        <a href="{{url("requisitos/inicio")}}">
          <button class="btn btn-danger"> Voltar </button>
        </a>
</div>

<h1 class="text-center">Gerenciar Versões</h1>

<div class="col-8 m-auto"> 
  @csrf
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Requisito</th>
      <th scope="col">Responsável</th>
      <th scope="col">Necessidade</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

  @foreach($historias as $historias)
  @php
  $user = $historias->find($historias->id)->relUsers;
  $requisito = $historias->find($historias->id)->relRequisito;
  $elicitacao = $historias->find($historias->id)->relElicitacao;
  @endphp
  <tr>
  
  @if ($historias->status == 'Concluida')

  @method('PUT')
      <th scope="row">{{$historias->id}}</th>
      <td>{{$requisito->programa}}</td>
      <td>{{$user->name}}</td>
      <td>{{$historias->necessidade}}</td>
      <td>{{$historias->status}}</td>
      <td>
        <a href="{{url("requisitos/gestaoversao/visualizar/$historias->id")}}">
          <button class="btn btn-success"> Visualizar </button>
        </a>
        <a href="{{url("requisitos/gestaoversao/imprimir/$historias->id")}}">
          <button class="btn btn-primary"> Imprimir </button>
        </a>
      </td>
  </tr>




@else
@endif  

@endforeach

  </tbody>
</table>


</div>


@endsection
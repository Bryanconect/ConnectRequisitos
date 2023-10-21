@extends('templates.template')

@section('content')

@php
$uservalidation = auth()->user()->tipo;
$userelicitacao = auth()->user()->id;
@endphp
<div class="text-center mt-3 mb-4">

<a @if($uservalidation == 1)  href="{{url("requisitos/")}}" else href="{{ route('login.destroy') }}" @endif >
          <button class="btn btn-success" @if($uservalidation == 2) disabled @else enable  @endif > Cadastrar Programa </button>
        </a>

        <a @if($uservalidation == 1)  href="{{url("gestaorequisito/")}}" else href="{{ route('login.destroy') }}" @endif >
          <button class="btn btn-success" @if($uservalidation == 2) disabled @else enable  @endif > Gestão de Programas </button>
        </a>

        <a @if($uservalidation == 1)  href="{{url("gestaousuario/")}}" else href="{{ route('login.destroy') }}" @endif >
          <button class="btn btn-success" @if($uservalidation == 2) disabled @else enable  @endif > Gestão de Usuários </button>
        </a>

        <a href="{{url("elicitacao/")}}">
        <button class="btn btn-success")> Cadastrar Elicitação </button>
        </a>

        <a href="{{ route('login.destroy') }}">
          <button class="btn btn-danger"> Sair do Sistema </button>
        </a>
</div>

<h1 class="text-center">Gerenciar Elicitações</h1>

<div class="col-8 m-auto"> 
  @csrf
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Titulo</th>
      <th scope="col">Setor Envolvido</th>
      <th scope="col">Data Reunião</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

  @foreach($elicitacao as $elicitacao)
  @php
  @endphp
  <tr>

  @if ($userelicitacao == $elicitacao->id_user)
  
      <th scope="row">{{$elicitacao->id}}</th>
      <td>{{$elicitacao->titulo}}</td>
      <td>{{$elicitacao->setor_envolvido}}</td>
      <td>{{$elicitacao->data_reuniao}}</td>
      <td>
        <a href="{{url("elicitacao/inicio/$elicitacao->id")}}">
          <button class="btn btn-info"> Visualizar </button>
        </a>
        <a href="{{url("elicitacao/inicio/edit/$elicitacao->id")}}">
          <button class="btn btn-secondary"> Editar </button>
        </a>
        <a href="{{url("elicitacao/inicio/excluir/$elicitacao->id")}}">
          <button class="btn btn-danger"> Excluir </button>
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
@extends('templates.template')

@section('content')

@php
$uservalidation = auth()->user()->tipo;
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

<h1 class="text-center">Gerenciar Requisitos</h1>

<div class="col-8 m-auto"> 
  @csrf
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Requisito</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
  @foreach($requisitos as $requisitos)
  @php
  @endphp

  @if ($requisitos->ativo == 'S')
  <tr>
      <th scope="row">{{$requisitos->id}}</th>
      <td>{{$requisitos->programa}}</td>
      <td>
        <a href="{{url("requisitos/criarhistoria/$requisitos->id")}}">
          <button class="btn btn-success"> Cadastrar História </button>
        </a>
        <a href="{{url("requisitos/gestaohistoria/$requisitos->id")}}">
          <button class="btn btn-secondary"> Gestão História </button>
        </a>
        <a href="{{url("requisitos/gestaoversao/$requisitos->id")}}">
          <button class="btn btn-info"> Gestão de Versão  </button>
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
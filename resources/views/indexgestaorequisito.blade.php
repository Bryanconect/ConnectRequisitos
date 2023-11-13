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

@if(session('mensagem'))
    <div class="text-center mt-3 mb-4 alert alert-success">
        <p>{{session('mensagem')}}</p>
    </div>
@endif 

<h1 class="text-center">Gerenciar Programas</h1>

<div class="col-8 m-auto"> 
  @csrf
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

  @foreach($requisitos as $requisitos)

  <tr>
  @method('PUT')
      <th scope="row">{{$requisitos->id}}</th>
      <td>{{$requisitos->programa}}</td>
      <td>@if($requisitos->ativo == 'S')Ativo @else Inativo @endif</td>
      <td>
        <a href="{{url("gestaorequisito/ativar/$requisitos->id")}}">
          <button class="btn btn-success"> Ativar </button>
        </a>
        <a href="{{url("gestaorequisito/inativar/$requisitos->id")}}">
          <button class="btn btn-danger"> Inativar </button>
        </a>
      </td>
  </tr>
 

@endforeach

  </tbody>
</table>


</div>


@endsection

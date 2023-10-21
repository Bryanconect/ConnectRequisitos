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

<h1 class="text-center">Gerenciar Usuários</h1>

<div class="col-8 m-auto"> 
  @csrf
<table class="table text-center">

  <thead class="table-dark">
  <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Usuário</th>
      <th scope="col">Autorizado</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

  @foreach($user as $user)

  <tr>
  @method('PUT')
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>@if($user->autorizado == 'S')Sim @else Não @endif</td>
      <td>
        <a href="{{url("requisitos/gestaousuario/autorizar/$user->id")}}">
          <button class="btn btn-success"> Autorizar </button>
        </a>
        <a href="{{url("requisitos/gestaousuario/cancelar/$user->id")}}">
          <button class="btn btn-danger"> Cancelar </button>
        </a>
      </td>
  </tr>
 

@endforeach

  </tbody>
</table>


</div>


@endsection
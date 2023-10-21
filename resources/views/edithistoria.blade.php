@extends('templates.template')

@section('content')



@php
  $user = $historias->find($historias->id)->relUsers;
  $requisito = $historias->find($historias->id)->relRequisito;
  $elicitacao = $historias->find($historias->id)->relElicitacao;
@endphp


<div class="text-center mt-3 mb-4">

<a href="{{url("requisitos/gestaohistoria/$requisito->id")}}">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>
<h1 class="text-center">Editar História de Usuário</h1>

<div class="col-8 m-auto"> 
    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
    @endif

@php
$userelicitacao = auth()->user()->id;
$uservalidation = auth()->user()->tipo;
@endphp




<form name="formCad" id="formCad" method="post" action="{{url("requisitos/gestaohistoria/editarhistoria/alterarhistoria/$historias->id")}}"> 

@csrf
@method('PUT')
<label>Programa: </label>
<select class="form-control" value="{{$historias->id_requisito}}" name="id_requisito" id="id_requisito"> 
<option value="{{$historias->id_requisito}}">{{$requisito->programa}}</option>
</select>

<label>Elicitação: </label>
<select class="form-control" name="id_elicitacao" id="id_elicitacao"> 
<option value="{{$historias->id_elicitacao}}">{{$elicitacao->titulo}}</option>
</select>


<label>Usuário: </label>
<select class="form-control" name="id_user" id="id_user" > 
<option value="{{$historias->id_user}}"> {{$user->name}} </option>
</select>


<label>Necessidade: </label>
<input class="form-control" type="text" maxLength="100" value="{{$historias->necessidade}}" name="necessidade" id="necessidade" placeholder="" required>

<label>Solução: </label>
<textarea class="form-control" type="text" maxLength="250" value="{{$historias->solucao}}" name="solucao" id="solucao" placeholder="" rows="4" cols="50" required>
{{$historias->solucao}}
</textarea>


<label>Cenário de Testes: </label>
<textarea class="form-control" type="text" maxLength="250" value="{{$historias->cenario_teste}}" name="cenario_teste" id="cenario_teste" placeholder="" rows="4" cols="50" required>
{{$historias->cenario_teste}}
</textarea>

<label>Especificação: </label>
<textarea class="form-control" type="text" maxLength="250" value="{{$historias->especificacao}}" name="especificacao" id="especificacao" placeholder="" rows="4" cols="50" required>
{{$historias->especificacao}}
</textarea>

<label>Status: </label>
<select class="form-control" value="Em Progresso" name="status" id="status" > 
<option value="Em Progresso"> Em Progresso </option>
</select>

<input class="btn btn-primary" type="submit">


</form>



</div>


@endsection
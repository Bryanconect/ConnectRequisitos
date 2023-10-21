@extends('templates.template')

@section('content')

<div class="text-center mt-3 mb-4">

<a href="{{url("requisitos/inicio")}}">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Cadastrar História de Usuário</h1>

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


<form name="formCad" id="formCad" method="post" action="{{url("requisitos/criarhistoria")}}"> 

@csrf
@method('PUT')
<label>Programa: </label>
<select class="form-control" value="{{$requisitos->id}}" name="id_requisito" id="id_requisito"> 
<option value="{{$requisitos->id}}">{{$requisitos->programa}}</option>
</select>

<label>Elicitação: </label>
<select class="form-control" name="id_elicitacao" id="id_elicitacao"> 
@foreach($elicitacao as $elicitacao)
<option value="{{$elicitacao->id}}">{{$elicitacao->titulo}}</option>

@endforeach
</select>

@if (auth()->check())
<label>Usuário: </label>
<select class="form-control" name="id_user" id="id_user" > 
<option value="{{ auth()->user()->id }}"> {{ auth()->user()->name }} </option>
</select>
@else
@endif

<label>Necessidade: </label>
<input class="form-control" type="text" maxLength="100" value="" name="necessidade" id="necessidade" placeholder="" required>

<label>Solução: </label>
<textarea class="form-control" type="text" maxLength="250" value="" name="solucao" id="solucao" placeholder="" required>
</textarea>

<label>Cenário de Testes: </label>
<textarea class="form-control" type="text" value="" maxLength="250" name="cenario_teste" id="cenario_teste" placeholder="" required>
</textarea>

<label>Especificação: </label>
<textarea class="form-control" type="text" value="" maxLength="250" name="especificacao" id="especificacao" placeholder="" required>
</textarea>

<label>Status: </label>
<select class="form-control" value="Aberto" name="status" id="status" > 
<option value="Aberto"> Aberto </option>
</select>

<input class="btn btn-primary" type="submit">


</form>

</div>


@endsection
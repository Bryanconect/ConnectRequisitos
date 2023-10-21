@extends('templates.template')

@section('content')



@php
  $user = $historias->find($historias->id)->relUsers;
  $requisito = $historias->find($historias->id)->relRequisito;
  $elicitacao = $historias->find($historias->id)->relElicitacao;
@endphp


<div class="text-center mt-3 mb-4">

<a href="{{url("requisitos/gestaoversao/$requisito->id")}}">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>
<h1 class="text-center">Visualizar História de Usuário</h1>

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

<label>Programa: </label>
<select class="form-control" value="{{$historias->id_requisito}}" name="id_requisito" id="id_requisito" disabled> 
<option value="{{$historias->id_requisito}}">{{$requisito->programa}}</option>
</select>

<label>Elicitação: </label>
<select class="form-control" name="id_elicitacao" id="id_elicitacao" disabled> 
<option value="{{$historias->id_elicitacao}}">{{$elicitacao->titulo}}</option>
</select>


<label>Usuário: </label>
<select class="form-control" name="id_user" id="id_user" disabled> 
<option value="{{$historias->id_user}}"> {{$user->name}} </option>
</select>


<label>Necessidade: </label>
<input class="form-control" type="text" value="{{$historias->necessidade}}" name="necessidade" id="necessidade" placeholder="" disabled>

<label>Solução: </label>
<textarea class="form-control" type="text" value="{{$historias->solucao}}" name="solucao" id="solucao" placeholder="" rows="4" cols="50" disabled>
{{$historias->solucao}}
</textarea>


<label>Cenário de Testes: </label>
<textarea class="form-control" type="text" value="{{$historias->cenario_teste}}" name="cenario_teste" id="cenario_teste" placeholder="" rows="4" cols="50" disabled>
{{$historias->cenario_teste}}
</textarea>

<label>Especificação: </label>
<textarea class="form-control" type="text" value="{{$historias->especificacao}}" name="especificacao" id="especificacao" placeholder="" rows="4" cols="50" disabled>
{{$historias->especificacao}}
</textarea>

<label>Status: </label>
<select class="form-control" value="{{$historias->status}}" name="status" id="status" disabled> 
<option value="{{$historias->status}}"> {{$historias->status}} </option>
</select>

</form>

</div>


@endsection
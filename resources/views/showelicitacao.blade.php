@extends('templates.template')

@section('content')

<div class="text-center mt-3 mb-4">

<a href="{{url("elicitacao/inicio")}}">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Visualizar Elicitação</h1>

<div class="col-8 m-auto"> 

<form name="formCad" id="formCad" method="post" action="{{url("elicitacao/inicio")}}"> 


@csrf
<label>Titulo: </label>
<input class="form-control" type="text" value="{{$elicitacao->titulo}}" name="titulo" id="titulo" placeholder="" disabled>
<label>Tipo: </label>
<input class="form-control" type="text" value="{{$elicitacao->tipo}}" name="tipo" id="tipo" placeholder="" disabled>
<label>Setor Envolvido: </label>
<input class="form-control" type="text" value="{{$elicitacao->setor_envolvido}}" name="setor_envolvido" id="setor_envolvido" placeholder="" disabled>
<label>Data: </label>
<input class="form-control" type="date" value="{{$elicitacao->data_reuniao}}" name="data_reuniao" id="data_reuniao" placeholder="" disabled>
@if (auth()->check())
<label>Usuário: </label>
<select class="form-control" value= "{{ auth()->user()->id }}" name="id_user" id="id_user" disabled> 
<option value="{{ auth()->user()->id }}" name="id_user" id="id_user"> {{ auth()->user()->name }} </option>
</select>
@else
@endif
<label>Conteudo: </label>
<textarea class="form-control" type="textarea" value="{{$elicitacao->conteudo}}" name="conteudo" id="conteudo" placeholder="" rows="4" cols="50" disabled>
{{$elicitacao->conteudo}}

</textarea>


</form>



</div>


@endsection
@extends('templates.template')

@section('content')


<div class="text-center mt-3 mb-4">

<a href="{{url("elicitacao/inicio")}}">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Editar Elicitação</h1>

<div class="col-8 m-auto"> 

<form name="formCad" id="formCad" method="post" action="{{url("elicitacao/update/$elicitacao->id")}}"> 


@csrf
@method('PUT')
<label>Titulo: </label>
<input class="form-control" type="text" maxLength="100" value="{{$elicitacao->titulo}}" name="titulo" id="titulo" placeholder="" required>
<label>Tipo: </label>
<input class="form-control" type="text" maxLength="100" value="{{$elicitacao->tipo}}" name="tipo" id="tipo" placeholder="" required >
<label>Setor Envolvido: </label>
<input class="form-control" type="text" maxLength="100" value="{{$elicitacao->setor_envolvido}}" name="setor_envolvido" id="setor_envolvido" placeholder="" required>
<label>Data: </label>
<input class="form-control" type="date" value="{{$elicitacao->data_reuniao}}" name="data_reuniao" id="data_reuniao" placeholder="" required>
@if (auth()->check())
<label>Usuário: </label>
<select class="form-control" value= "{{ auth()->user()->id }}" name="id_user" id="id_user"> 
<option value="{{ auth()->user()->id }}" name="id_user" id="id_user"> {{ auth()->user()->name }} </option>
</select>
@else
@endif
<label>Conteudo: </label>
<textarea class="form-control" type="textarea" maxLength="250" value="{{$elicitacao->conteudo}}" name="conteudo" id="conteudo" placeholder="" rows="4" cols="50" required>
{{$elicitacao->conteudo}}

</textarea>




<input class="btn btn-primary" type="submit">

</form>

</div>


@endsection
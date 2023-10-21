@extends('templates.template')

@section('content')

<div class="text-center mt-3 mb-4">

<a href="{{url("elicitacao/inicio")}}">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Cadastrar Elicitação</h1>

<div class="col-8 m-auto"> 
    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
    @endif


<form name="formCad" id="formCad" method="post" action="{{url("elicitacao")}}"> 


@csrf
<label>Titulo: </label>
<input class="form-control" type="text" maxLength="100" name="titulo" id="titulo" placeholder="Digite o titulo" required>
<label>Tipo: </label>
<input class="form-control" type="text" maxLength="100" name="tipo" id="tipo" placeholder="Digite o tipo" required>
<label>Setor Envolvido: </label>
<input class="form-control" type="text" maxLength="100" name="setor_envolvido" id="setor_envolvido" placeholder="Digite o setor" required>
<label>Data: </label>
<input class="form-control" type="date" name="data_reuniao" id="data_reuniao" placeholder="" required>
@if (auth()->check())
<label>Usuário: </label>
<select class="form-control" value= "{{ auth()->user()->id }}" name="id_user" id="id_user"> 
<option value="{{ auth()->user()->id }}" name="id_user" id="id_user"> {{ auth()->user()->name }} </option>
</select>
@else
@endif
<label>Conteudo: </label>
<textarea class="form-control" type="textarea" maxLength="250" name="conteudo" id="conteudo" placeholder="" rows="4" cols="50" required>
</textarea>
<input class="btn btn-primary" type="submit">


</form>

</div>


@endsection
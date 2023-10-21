@extends('templates.template')

@section('content')

<div class="text-center mt-3 mb-4">

<a href="{{url("requisitos/inicio")}}">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Cadastrar Programa</h1>

<div class="col-8 m-auto"> 
    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
    @endif


<form name="formCad" id="formCad" method="post" action="{{url("requisitos")}}"> 


@csrf
<label>Programa: </label>
<input class="form-control" type="text" maxLength="100" name="programa" id="programa" placeholder="Digite o nome do programa">
<input class="btn btn-primary" type="submit">


</form>

</div>


@endsection
@extends('templates.template')

@section('content')

<div class="text-center mt-3 mb-4">

<a href="{{url("requisitos/inicio")}}">
        <button class="btn btn-danger")> Voltar </button>
        </a>
     
</div>

<h1 class="text-center">Relatórios</h1>

<div class="col-8 m-auto"> 
    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
    @endif
    


   
<form name="formCad" id="formCad" method="post" action="{{url("relatorios/tipogeracao")}}"> 
@csrf
<label>Requisito: </label>
<select class="form-control" name="id_requisito" id="id_requisito"> 
@foreach($requisitos as $requisitos)
<option value="{{$requisitos->id}}">{{$requisitos->programa}}</option>
@endforeach
</select>


<label>Filtros: </label>
<select class="form-control" name="filtro" id="filtro"> 
<option value="1" name="filtro" id="filtro"> Histórias Homologadas </option>
<option value="2" name="filtro" id="filtro"> Histórias Canceladas </option>
<option value="3" name="filtro" id="filtro"> Histórias Abertas </option>
</select>
<label>Data Inicial: </label>
<input class="form-control" type="date" name="data_inicial" id="data_inicial" placeholder="">
<label>Data Final: </label>
<input class="form-control" type="date" name="data_final" id="data_final" placeholder="">
<input class="btn btn-primary" type="submit">


</form>

</div>


@endsection
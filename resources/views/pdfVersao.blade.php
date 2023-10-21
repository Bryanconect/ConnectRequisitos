
@foreach($historias as $historias)

@php
  $user = $historias->find($historias->id)->relUsers;
  $requisito = $historias->find($historias->id)->relRequisito;
  $elicitacao = $historias->find($historias->id)->relElicitacao;
@endphp


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF</title>
</head>
<body>

<br>
<br>
<label>Programa: </label>
<textarea class="form-control" type="text" value="{$requisito->programa}}" name="" id="" placeholder="" rows="4" cols="50">
{{$requisito->programa}}
</textarea>


<label>Elicitação: </label>
<textarea class="form-control" type="text" value="{{$elicitacao->titulo}}" name="" id="" placeholder="" rows="4" cols="50">
{{$elicitacao->titulo}}
</textarea>

<label>Usuário: </label>
<textarea class="form-control" type="text" value="{{$user->name}}" name="" id="" placeholder="" rows="4" cols="50">
{{$user->name}} 
</textarea>


<label>Necessidade: </label>
<textarea class="form-control" type="text" value="{{$historias->necessidade}}"  name="" id="" placeholder="" rows="4" cols="50">
{{$historias->necessidade}}
</textarea>


<label>Solução: </label>
<textarea class="form-control" type="text" value="{{$historias->solucao}}" name="solucao" id="solucao" placeholder="" rows="4" cols="50">
{{$historias->solucao}}
</textarea>


<label>Cenário de Testes: </label>
<textarea class="form-control" type="text" value="{{$historias->cenario_teste}}" name="cenario_teste" id="cenario_teste" placeholder="" rows="4" cols="50">
{{$historias->cenario_teste}}
</textarea>

<label>Especificação: </label>
<textarea class="form-control" type="text" value="{{$historias->especificacao}}" name="especificacao" id="especificacao" placeholder="" rows="4" cols="50">
{{$historias->especificacao}}
</textarea>

<label>Status: </label>
<textarea class="form-control" type="text" value="{{$historias->status}}" name="status" id="status" placeholder="" rows="4" cols="50">
{{$historias->status}}
</textarea>

  @endforeach
</body>
</html>

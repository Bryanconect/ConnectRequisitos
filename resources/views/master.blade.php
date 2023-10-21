@extends('templates.template2')


<div class="text-center mt-3 mb-4">

<div class="col-8 m-auto"> 


<div class="col-md-10 mx-auto col-lg-8  bg-light"> 
  @if (auth()->check())
    Deseja sair do sistema? <a class="btn btn-danger" href="{{ route('login.destroy') }}">Sair do Sistema</a>
    @else
    @endif
  </div>

</div>
</div>

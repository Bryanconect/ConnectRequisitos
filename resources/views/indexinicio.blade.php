    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}"> 
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Connect</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>


<body class="bg-secondary">


@extends('master')

@section('content')





<div class="container mt-4">

<div class="row align-itens-center">

<div class="card text-center">
  <div class="card-header">
  Connect Online Requeriments
  </div>
  <div class="card-body">
    <h5 class="card-title">Faça a gestão de seus requisitos de forma online!</h5>
    <p class="card-text">Já conhece nossos serviços? Clique na área restrita.</p>
    <a href="{{url("/login")}}" class="btn btn-success" role="button">Área Restrita &raquo;</a>
  </div>
  <div class="card-footer text-body-secondary">
  </div>
</div>





</div>
</div>




<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing mt-4" >

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('assets/img/gestao1.png') }}" alt="Generic placeholder image" width="140" height="140">
      <h2>Agilidade</h2>
      <p>A agilidade adapta as práticas mais comuns referentes à maneira de desenvolver um produto ou serviço, uma vez que ela surgiu com o objetivo de adaptar as necessidades atuais do mercado para a área de desenvolvimento de software.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('assets/img/gestao2.png') }}" alt="Generic placeholder image" width="140" height="140">
      <h2>Organização</h2>
      <p>A instabilidade de requisitos pode ser muito prejudicial ao sistema como um todo. O gerenciamento de requisitos é necessário para que haja a correta documentação e controle das mudanças dos requisitos do sistema.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('assets/img/gestao3.png') }}" alt="Generic placeholder image" width="140" height="140">
      <h2>Eficiência</h2>
      <p>Deve-se investir em treinamentos de análise, documentação e orientação a objetos, além de testes de software e, incentivar os funcionários a adotarem a risco estas metodologias de análise, desenvolvimento e testes de software.</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

<footer class="bd-footer py-4 py-md-5 mt-2 bg-body-tertiary">
  <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
          <span class="fs-5">Connect</span>
        </a>
        <ul class="list-unstyled small">
          <li class="mb-2">Em busca de solução?</li>
          <li class="mb-2">Aqui tem a documentação!</li>
          <li class="mb-2">Código de Licença <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a></li>
          <li class="mb-2">Versão: v1.0</li>
        </ul>
      </div>


      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5></h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="/docs/5.3/getting-started/"></a></li>
          <li class="mb-2"><a href="/docs/5.3/examples/starter-template/"></a></li>
          <li class="mb-2"><a href="/docs/5.3/getting-started/webpack/"></a></li>
          <li class="mb-2"><a href="/docs/5.3/getting-started/parcel/"></a></li>
          <li class="mb-2"><a href="/docs/5.3/getting-started/vite/"></a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5></h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener"></a></li>
          <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev" target="_blank" rel="noopener"></a></li>
          <li class="mb-2"><a href="https://github.com/twbs/icons" target="_blank" rel="noopener"></a></li>
          <li class="mb-2"><a href="https://github.com/twbs/rfs" target="_blank" rel="noopener"></a></li>
          <li class="mb-2"><a href="https://github.com/twbs/examples/" target="_blank" rel="noopener"></a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Links</h5>
        <ul class="list-unstyled">

<a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Facebook">
<svg xmlns="http://www.w3.org/2000/svg" a href="/" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
 <span class="fs-5">Facebook</span>
</a>
<a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Facebook">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
 <span class="fs-5">Instagram</span>
</a>
<a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Facebook">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
 <span class="fs-5">Linkedin</span>
</a>
<a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Facebook">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
 <span class="fs-5">Twitter</span>
</a>
<a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Facebook">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
 <span class="fs-5">Youtube</span>
</a>
         
        </ul>
      </div>
    </div>
  </div>
  <div id="footer-bottom" class="wpex-py-20 wpex-text-sm wpex-surface-dark wpex-bg-gray-900 wpex-text-center wpex-md-text-left wpex-print-hidden">
<div id="footer-bottom-inner" class="container"><div class="footer-bottom-flex wpex-md-flex wpex-md-justify-between wpex-md-items-center">
<div id="copyright" class="wpex-last-mb-0  text-center">Copyright 2023 | Todos direitos reservados a Bryan Oliveira. </div></div></div>
</div>
</div>
</div>
</footer>
   
<script src="{{url("assets/js/javascript.js")}}">  </script>
<script src="{{url("assets/js/javascript2.js")}}">  </script>

</body>
</html>


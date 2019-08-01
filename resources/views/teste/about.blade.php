@extends('layout')
@section('titulo')
Sobre
@endsection
@section('conteudo')
<div class="row">
  <div class="col-4">
    <figure>
      <img src="images/eu.jpg" width="90%" alt="Este sou eu">
      <figcaption>Este sou eu, quando estava um pouco mais saudável.</figcaption>
    </figure>
  </div>
  <div class="d-flex flex-column col-5 ">
    <div class="row mb-2">
      <h3>Nome:</h3>
      <h3>Gustavo Antonio Pereira</h2>
    </div>
    <div class="row mb-2">
      <h3>Email:</h3>
      <h3>gugupereira123@hotmail.com</h2>
    </div>
    <div class="row mb-2">
      <h3>Telefone:</h3>
      <h3>(18)32891501</h2>
    </div>
    <div class="row mb-2">
      <h3>Celular:</h3>
      <h3>(18)997542891</h2>
    </div>
    <div class="">
    </div>
  </div>
  <div class=" d-flex">
    <a href="https://www.facebook.com/gustavo.antoniopereira.77" class="ml-5 mr-3" style="color:blue">
      <i class="fab fa-facebook-square fa-4x"></i>
    </a>
    <a href="https://github.com/gugumata147" class="mr-3" style="color:black">
      <i class="fab fa-github fa-4x"></i>
    </a>
    <a href="https://www.linkedin.com/in/gustavo-pereira-1a1554168/" style="color:blue">
      <i class="fab fa-linkedin fa-4x"></i>
    </a>
  </div>
</div>
@endsection('conteudo')

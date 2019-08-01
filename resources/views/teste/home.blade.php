@extends('layout')
@section('titulo')
Bem vindo à página inicial
@endsection

@section('conteudo')
<div class="row justify-content-md-center">
    <h1>Vídeo que me motivou, voltar a programar com PHP</h1>
    <iframe width="768" height="512" src="https://www.youtube.com/embed/VdeuOXFaYMw"
     frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen>
    </iframe>
</div>
@endsection

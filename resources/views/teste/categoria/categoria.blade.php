@extends('layout')
@section('titulo')
Lista de categorias
@endsection
@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
  <a href="/categoria/criar" class="btn btn-lg btn-dark mb-1" tabindex="5">Nova categoria</a>
  <div>
    <ul class="list-group">
      <label class="col-0 col-form-label col-form-label-lg">Nome</label>
      @foreach($categorias as $categoria)
      <li class="list-group-item d-flex justify-content-between align-items-center">
          <h3>{{$categoria->nome}}</h3>
          <span class="d-flex">
            <form class="mr-2" action="/categoria/{{$categoria->id}}" method="post"
    onsubmit="return confirm('Você tem certeza que quer remover à {{addslashes($categoria->nome)}} da lista de categoria?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-lg" name="button">Excluir</button>
            </form>
            <form class="" action="/categoria/{{$categoria->id}}"   method="post">
              @csrf
              <button type="submit" class="btn btn-info btn-lg" name="button">Alterar</button>
            </form>
          </span>
      </li>
      @endforeach
    </ul>
  </div>
@endsection

@extends('layout')
@section('titulo')
Lista de produtos
@endsection
@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
  <a href="/produto/criar" class="btn btn-lg btn-dark mb-1" tabindex="5">Novo produto</a>
  <div>
    <div class="row">
    <label class="col-sm-4 col-form-label col-form-label-lg">Nome</label>
    <label class="col-sm-6 col-form-label col-form-label-lg">Categoria</label>
    </div>
    <ul class="list-group">
      @foreach($produtos as $produto)
      <li class="list-group-item form-row">
        <div class="row">
          <div class="col-sm-4">
            <h3>{{$produto->nome}}</h3>
          </div>
          <div class="col-sm-6">
            @foreach($categorias as $categoria)
            @if($produto->categoria_id == $categoria->id)
            <h3>{{$categoria->nome}}</h3>
            @endif
            @endforeach
          </div>
          <div class="row">
            <span class="row">
              <form class="mr-2" action="/produto/{{$produto->id}}" method="post"
      onsubmit="return confirm('Você tem certeza que quer remover à {{addslashes($produto->nome)}} da lista de produtos?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-lg" name="button">Excluir</button>
              </form>
              <form action="/produto/{{$produto->id}}"  method="post">
                @csrf
                <button type="submit" class="btn btn-info btn-lg" name="button">Alterar</button>
              </form>
            </span>
          </div>

        </div>

      </li>
      @endforeach
    </ul>
  </div>
@endsection

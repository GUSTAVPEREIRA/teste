@extends('layout')
@section('titulo')
Novo produto
@endsection
@section('conteudo')
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
  @if(isset($produto))
  <form action="/produto/update/{{$produto->id}}" method="post">
    {!! method_field('PUT') !!}
  @else
  <form action="/produto/criar" method="post">
  @endif
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-8">
          <label class="col-form-label col-form-label-lg" for="nome">Nome:</label>
            @csrf
          <input type="text" class="form-control" id="nome" placeholder="Exemplo: Miolo de paleta.."
          value="{{isset($produto->nome)?$produto->nome:old('nome')}}"
          required='true' name="nome">
        </div>
        <div class="col-md-4">
          <label class="col-form-label col-form-label-lg" for="categoria">Categoria:</label>
            @csrf
          <select class="custom-select" name="categoria_id" id="categoria_id">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}"
              @if(isset($produto) && $produto->categoria_id == $categoria->id)
                selected
              @endif
              >{{$categoria->nome}}</option>
            @endforeach
          </select>
        </div>
    </div>
    <span>
      <button type="submit" class="btn btn-lg btn-success mt-1" name="button">Salvar</button>
    </span>

  </form>
@endsection

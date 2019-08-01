@extends('layout')
@section('titulo')
Nova categoria
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
  @if(isset($categoria))
  <form action="/categoria/update/{{$categoria->id}}" method="post">
    {!! method_field('PUT') !!}
  @else
  <form action="/categoria/criar" method="post">
  @endif
    <div class="form-group">
        <label for="nome" class="col-form-label col-form-label-lg">Nome:</label>
        @csrf
        <input type="text" class="form-control" maxlength="100" id="nome" name="nome" required='true'
        placeholder="Exemplo:Bebidas" value="{{isset($categoria->nome)?$categoria->nome:old('nome')}}">
        <span>
          <button type="submit" class="btn btn-lg btn-success mt-1" name="button">Salvar</button>
        </span>
    </div>
  </form>
@endsection

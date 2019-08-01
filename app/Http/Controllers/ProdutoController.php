<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;


class ProdutoController extends Controller
{

  public function index(Request $request) {
    $produtos = Produto::query()->orderBy('nome')->get();
    $categorias = Categoria::query()->orderBy('nome')->get();
    $mensagem = $request->session()->get('mensagem');
    return view('teste.produto.produto',compact('produtos','categorias','mensagem'));
  }

  public function create(){
    $categorias = Categoria::query()->orderBy('nome')->get();
    return view('teste.produto.create',compact('categorias'));
  }

  public function store(Request $request){

    $insert = Produto::Create([
        'nome' => $request->nome,
        'categoria_id' => $request->categoria_id
    ]);
    $request->session()->flash('mensagem',"Produto {$request->nome} foi criada com sucesso.");
    return redirect('/produto');
  }

  public function destroy(Request $request){
    Produto::destroy($request->id);
    $request->session()->flash('mensagem',"Produto foi excluído com sucesso");
    return redirect('/produto');
  }

  public function edit(Request $request){
    $produto = Produto::find($request->id);
    $categorias = Categoria::query()->orderBy('nome')->get();
    return view('teste.produto.create',compact('produto','categorias'));
  }

  public function update(Request $request, $id)
  {
    $produto = Produto::find($id);
    $nome = $produto->nome;
    $produtoForm = $request->all();
    $update = $produto->update($produtoForm);
    $request->session()->flash('mensagem',"Categoria $nome foi alterada para $produto->nome");
    return redirect('/produto');
  }

}









 ?>

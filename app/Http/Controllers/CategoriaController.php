<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaFormRequest;

class CategoriaController extends Controller
{

  public function index(Request $request) {
    $categorias = Categoria::query()->orderBy('nome')->get();
    $mensagem = $request->session()->get('mensagem');
    return view('teste.categoria.categoria', compact('categorias','mensagem'));
  }

  public function create(){

    return view('teste.categoria.create');
  }

  public function store(CategoriaFormRequest $request){
    $categoria = Categoria::Create($request->all());
    $request->session()->flash('mensagem',"Categoria {$categoria->nome} foi criada com sucesso.");
    return redirect('/categoria');
  }

  public function destroy(Request $request){
    Categoria::destroy($request->id);
    $request->session()->flash('mensagem',"Categoria foi excluída com sucesso");
    return redirect('/categoria');
  }

  public function edit(Request $request){
    $categoria = Categoria::find($request->id);
    return view('teste.categoria.create',compact('categoria'));
  }

  public function update(CategoriaFormRequest $request, $id)
  {
    $categoria = Categoria::find($id);
    $nome = $categoria->nome;
    $categoriaForm = $request->all();
    $update = $categoria->update($categoriaForm);
    $request->session()->flash('mensagem',"Categoria $nome foi alterada para $categoria->nome");
    return redirect('/categoria');
  }
}









 ?>

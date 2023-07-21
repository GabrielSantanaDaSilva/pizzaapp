<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use illuminate\http\Request;
use App\Models\{
    Produto,
    ProdutoTamanho,
    TipoProduto,
    Tamanho
};
class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::orderBy('nome');

        return view('produto.index')
                            ->with(compact('produtos'));
    }


    public function create()
    {
        $produto = null;
        $tiposProduto = TipoProduto::class;
        return view('produto.form')
                            ->with(compact('produto', 'tiposProduto'));
    }


    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return redirect()
        ->route('produto.show',['id' => $produto->id_produto])
                                                -> with('success','Cadastrado com sucesso');

    }

    public function show(int $id)
    {
        $produto = Produto::find($id);
        $tamanhos = Tamanho::class;

        return view('produto.show')
                           ->with(compact('produto', 'tamanhos'));
    }

    public function edit(int $id)
    {
        $produto = null;
        $tiposProduto = TipoProduto::class;
        return view('produto.form')
                            ->with(compact('produto', 'tiposProduto'));
    }


    public function update(Request $request, int $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->route('produto.show',['id' => $produto->id_produto])
                                                        ->with('success','atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        produto::find($id)->delete();
        return redirect()->back()->with('danger','removido com sucesso');

    }



    // tamanhos dos produtos

    public function createTamanho(int $id_produto) {
        $produtoTamanho = null;
        $produto = Produto::find($id_produto);
        $tamanhos = Tamanho::class;

        return view('produto.formTamanho')
                ->with(compact('produto','tamanhos','produtoTamanho'));


    }

    public function storeTamanho(Request $request, int $id_produto)
    {
            dd($id_produto);
            dd($request);
        $produtoTamanho = ProdutoTamanho::create([

                'id_produto' => $id_produto,
                'id_tamanho' => $request->id_tamanho,
                'preco'      => $request->preco,
                'observacoes'=> $request->observacoes

        ]);

        return  redirect()
                ->route('produto.show', ['id' => $id_produto])
                ->with('success','tamanho cadastrado com sucesso');
    }

    public function editTamanho(int $id)
    {
        $produtoTamanho = ProdutoTamanho::find($id);
        //$produto = Produto::find($produtoTamanho->id_produto)
        $produto = $produtoTamanho->produto();
        $produtoTamanho = ProdutoTamanho::class;
        return view('produto.formTamanho')->with(compact('produto','tamanho','produtoTamanho'));




    }

    public function updateTamanho(Request $request, int $id){
        $produtoTamanho = ProdutoTamanho::find($id);
        $produtoTamanho->update($request->all());

        return redirect()->route('produto.show',['id' => $produtoTamanho->id_produto])
        ->with('success', 'Atualizado com sucesso');
    }

    public function destroyTamanho(int $id) {

        ProdutoTamanho::find($id)->delete();
        return redirect()->back()->with('danger','Excluido com sucesso');


    }
}

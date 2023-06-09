<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('POST')) {
            $order = $request->order == 'asc' ? 'asc' : 'desc';

            $prods = Produto::where('name', 'LIKE', "%{$request->search}%")
                ->orderBy('id', $order)
                ->paginate();
        } else {
            $prods = Produto::paginate();
        }
        return view('produtos.index', [
            'prods' => $prods
        ]);
    }
    public function add()
    {
        return view('produtos.add');
    }

    public function addSave(Request $form)
    {
        $dados = $form->validate([
            'name' => 'required|min:3|unique:produtos',
            'price' => 'required|gte:0|numeric',
            'quantity' => 'required|gte:0'
        ]);
        Produto::create($form->toArray());
        return redirect()->route('produtos')->with('sucesso', 'Produto inserido com sucesso');
    }
    public function view(Produto $produto)
    {
        return view('produtos.view', ['prod' => $produto]);
    }

    public function edit(Produto $produto)
    {
        return view('produtos.add', [
            'prod' => $produto
        ]);
    }
    public function editSave(Request $form, Produto $produto)
    {
        $dados = $form->validate([
            'name' => [
                'required',
                Rule::unique('produtos')->ignore($produto->id),
                'min:3',
            ],
            'price' => 'required|gte:0|numeric',
            'quantity' => 'required|gte:0'
        ]);

        $produto->fill($dados)->save();

        return redirect()->route('produtos')->with('sucesso', 'Produto alterado com sucesso');
    }
    public function delete(Produto $produto)
    {
        return view('produtos.delete', [
            'prod' => $produto,
        ]);
    }
    public function deleteForReal(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos')->with('sucesso', 'Produto apagado com sucesso!');
    }
}

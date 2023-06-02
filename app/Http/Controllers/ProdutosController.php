<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Exception;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $prods = Produto::all();
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
            'price' => 'required|min:0|numeric',
            'quantity' => 'required|min:0'
        ]);
        Produto::create($form->toArray());
        return redirect()->route('produtos');
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
}

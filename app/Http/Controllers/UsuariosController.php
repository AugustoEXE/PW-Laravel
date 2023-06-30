<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::paginate();

        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $data)
    {
        Usuario::create($data->toArray());
        return redirect()->route('usuarios')->with('sucesso', 'usuario inserido com sucesso');
    }

    public function view(Usuario $usuario)
    {
        return view('usuarios.view', ['usuario' => $usuario]);
    }
    public function edit(Usuario $usuario)
    {
        return view('usuarios.create', [
            'usuario' => $usuario
        ]);
    }
    public function editSave(Request $data, Usuario $usuario)
    {

        $usuario->fill($data->toArray())->save();

        return redirect()->route('usuarios')->with('sucesso', 'usuario alterado com sucesso');
    }

    public function delete(Usuario $usuario)
    {
        return view('usuarios.delete', [
            'usuario' => $usuario,
        ]);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios')->with('sucesso', 'usuario apagado com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if (Auth::attempt($data)) {
                return redirect()->intended('home');
            } else {
                return redirect()->route('login')->with('error', 'Credenciais incorretas');
            }
        }

        return view('autentica.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

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
        $data['password'] = Hash::make($data['password']);
        $usr = Usuario::create($data->toArray());

        event(new Registered($usr));

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class usuariosController extends Controller
{
    //

    public function index()
    {
        //
        $user = Auth::user();

        $usuarios = User::all();

        return view('conteudos.usuarios.app_usuarios', compact('user', 'usuarios'));

    }

    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar usuario';
        return view('conteudos.usuarios.app_register_usuario', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);

        $usuario->save();
 
        // redirecionar para a página inicial
        Alert::toast('usuario Registado Com Sucesso', 'success');

        return redirect('/usuarios');
    }

    public function show($id)
    {
        $user = Auth::user();
        $usuario = User::find($id);

        // return $usuario;

        return view('conteudos.usuarios.app_visualizar_usuario', compact('user','usuario'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $usuario = User::find($id);

        // return $usuario;
        return view('conteudos.usuarios.app_editar_usuario', compact('user', 'usuario'));
    }

    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->password = Hash::make($request->password);

        $usuario->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/usuarios');
    }


    public function destroy($id)
    {
        //
        User::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/usuarios');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/usuarios');
    }
}

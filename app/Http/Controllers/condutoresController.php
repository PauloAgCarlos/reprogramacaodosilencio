<?php

namespace App\Http\Controllers;

use App\Models\Condutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class condutoresController extends Controller
{
    //

    public function index()
    {
        //
        $user = Auth::user();

        $condutores = Condutor::all();

        return view('conteudos.condutores.app_condutor', compact('user', 'condutores'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar condutor';
        return view('conteudos.condutores.app_registar_condutor', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $condutor = new Condutor;
        $condutor->nome = $request->nome;
        $condutor->data_nascimento = $request->data_nascimento;
        $condutor->email = $request->email;
        $condutor->cep = $request->cep;
        $condutor->rg = $request->rg;
        $condutor->cpf = $request->cpf;
        $condutor->telefone = $request->telefone;
        $condutor->usuario_id = $request->usuario_id;
        

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $condutor->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/condutores/imag_'.$condutor->id.'.'.$extensaoI);
            $condutor->foto = '/images/condutores/imag_'.$condutor->id.'.'.$extensaoI;
            $condutor->save();
        }


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('123mudar'),
        ]);

        $condutor->usuario_id = $usuario->id;

        $condutor->save();

        // redirecionar para a página inicial
        Alert::toast('condutor Registado Com Sucesso', 'success');

        return redirect('/condutores');
    }



    public function show($id)
    {
        $user = Auth::user();
        $condutor = Condutor::find($id);

        return view('conteudos.condutores.app_visualizar_condutor', compact('user','condutor'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $condutor = Condutor::find($id);

        return view('conteudos.condutores.app_editar_condutor', compact('user','condutor'));
    }

        public function update(Request $request, $id)
    {
        //

        $condutor = Condutor::find($id);
        $condutor->nome = $request->nome;
        $condutor->data_nascimento = $request->data_nascimento;
        $condutor->email = $request->email;
        $condutor->cep = $request->cep;
        $condutor->rg = $request->rg;
        $condutor->cpf = $request->cpf;
        $condutor->telefone = $request->telefone;
        $condutor->usuario_id = $request->usuario_id;

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $condutor->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/condutores/imag_'.$condutor->id.'.'.$extensaoI);
            $condutor->foto = '/images/condutores/imag_'.$condutor->id.'.'.$extensaoI;
            $condutor->save();
        }


        $condutor->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/condutores');
    }


    public function destroy($id)
    {
        //
        Condutor::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/condutores');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/condutores');
    }
}

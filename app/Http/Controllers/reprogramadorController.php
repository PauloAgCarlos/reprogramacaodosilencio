<?php

namespace App\Http\Controllers;

use App\Models\Reprogramador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class reprogramadorController extends Controller
{
    //

    public function index()
    {
        //
        $user = Auth::user();

        $reprogramadores = Reprogramador::all();

        return view('conteudos.reprogramadores.app_reprogramador', compact('user', 'reprogramadores'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar reprogramador';
        return view('conteudos.reprogramadores.app_registar_reprogramador', compact('user'));
    }

    public function store(Request $request)
    {
        
        //
        $user = Auth::user();

        $reprogramador = new Reprogramador;
        $reprogramador->nome = $request->nome;
        $reprogramador->data_nascimento = $request->data_nascimento;
        $reprogramador->email = $request->email;
        $reprogramador->cep = $request->cep;
        $reprogramador->usuario_id = $request->usuario_id;
        

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $reprogramador->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/reprogramadores/imag_'.$reprogramador->id.'.'.$extensaoI);
            $reprogramador->foto = '/images/reprogramadores/imag_'.$reprogramador->id.'.'.$extensaoI;
            $reprogramador->save();
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

        $reprogramador->usuario_id = $usuario->id;

        $reprogramador->save();

        // redirecionar para a página inicial
        Alert::toast('reprogramador Registado Com Sucesso', 'success');

        return redirect('/reprogramadores');
    }



    public function show($id)
    {
        $user = Auth::user();
        $reprogramador = Reprogramador::find($id);

        return view('conteudos.reprogramadores.app_visualizar_reprogramador', compact('user','reprogramador'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $reprogramador = Reprogramador::find($id);

        return view('conteudos.reprogramadores.app_editar_reprogramador', compact('user','reprogramador'));
    }

        public function update(Request $request, $id)
    {
        //

        $reprogramador = Reprogramador::find($id);
        $reprogramador->nome = $request->nome;
        $reprogramador->data_nascimento = $request->data_nascimento;
        $reprogramador->email = $request->email;
        $reprogramador->cep = $request->cep;
        $reprogramador->usuario_id = $request->usuario_id;

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $reprogramador->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/reprogramadores/imag_'.$reprogramador->id.'.'.$extensaoI);
            $reprogramador->foto = '/images/reprogramadores/imag_'.$reprogramador->id.'.'.$extensaoI;
            $reprogramador->save();
        }


        $reprogramador->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/reprogramadores');
    }


    public function destroy($id)
    {
        //
        Reprogramador::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/reprogramadores');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/reprogramadores');
    }
}

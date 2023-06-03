<?php

namespace App\Http\Controllers;

use App\Models\Arquitetos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;


class arquitetoController extends Controller
{
    //
    
    public function index()
    {
        //
        $user = Auth::user();

        $arquitetos = Arquitetos::all();

        return view('conteudos.arquitetos.app_arquiteto', compact('user', 'arquitetos'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar arquiteto';
        return view('conteudos.arquitetos.app_registar_arquiteto', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $arquiteto = new Arquitetos;
        $arquiteto->nome = $request->nome;
        $arquiteto->data_nascimento = $request->data_nascimento;
        $arquiteto->email = $request->email;
        $arquiteto->cep = $request->cep;
        $arquiteto->usuario_id = $request->usuario_id;
        

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $arquiteto->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/arquitetos/imag_'.$arquiteto->id.'.'.$extensaoI);
            $arquiteto->foto = '/images/arquitetos/imag_'.$arquiteto->id.'.'.$extensaoI;
            $arquiteto->save();
        }

        // redirecionar para a página inicial
        Alert::toast('arquiteto Registado Com Sucesso', 'success');

        return redirect('/arquitetos');
    }



    public function show($id)
    {
        $user = Auth::user();
        $arquiteto = Arquitetos::find($id);

        return view('conteudos.arquitetos.app_visualizar_arquiteto', compact('user','arquiteto'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $arquiteto = Arquitetos::find($id);

        return view('conteudos.arquitetos.app_editar_arquiteto', compact('user','arquiteto'));
    }

        public function update(Request $request, $id)
    {
        //

        $arquiteto = Arquitetos::find($id);
        $arquiteto->nome = $request->nome;
        $arquiteto->data_nascimento = $request->data_nascimento;
        $arquiteto->email = $request->email;
        $arquiteto->cep = $request->cep;
        $arquiteto->usuario_id = $request->usuario_id;

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $arquiteto->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/arquitetos/imag_'.$arquiteto->id.'.'.$extensaoI);
            $arquiteto->foto = '/images/arquitetos/imag_'.$arquiteto->id.'.'.$extensaoI;
            $arquiteto->save();
        }


        $arquiteto->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/arquitetos');
    }


    public function destroy($id)
    {
        //
        Arquitetos::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/arquitetos');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/arquitetos');
    }
}

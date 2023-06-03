<?php

namespace App\Http\Controllers;

use App\Models\Configuracoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class configuracoesController extends Controller
{
    //
    public function index()
    {
        //  
        $user = Auth::user();

        $configuracoes = Configuracoes::all();

        return view('conteudos.configuracoes.app_configuracao', compact('user', 'configuracoes'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar configuracao';
        return view('conteudos.configuracoes.app_registar_configuracao', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $configuracao = new Configuracoes;
        $configuracao->status_anuidade = $request->status_anuidade;

        // redirecionar para a página inicial
        Alert::toast('configuracao Registado Com Sucesso', 'success');

        return redirect('/configuracoes');
    }



    public function show($id)
    {
        $user = Auth::user();
        $configuracao = Configuracoes::find($id);

        return view('conteudos.configuracoes.app_visualizar_configuracao', compact('user','configuracao'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $configuracao = Configuracoes::find($id);

        return view('conteudos.configuracoes.app_editar_configuracao', compact('user','configuracao'));
    }

        public function update(Request $request, $id)
    {
        //

        $configuracao = Configuracoes::find($id);
        $configuracao->status_anuidade = $request->status_anuidade;

        $configuracao->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/configuracoes');
    }


    public function destroy($id)
    {
        //
        Configuracoes::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/configuracoes');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/configuracoes');
    }
}

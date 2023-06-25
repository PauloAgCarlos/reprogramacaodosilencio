<?php

namespace App\Http\Controllers;

use App\Models\Canais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;


class canaisController extends Controller
{
    //

    public function index()
    {
        //
        $user = Auth::user();

        $canais = Canais::where('status', 1)->get();

        return view('conteudos.canais.app_canais', compact('user', 'canais'));
    }

    public function pendentes()
    {
        //
        $user = Auth::user();

        $canais = Canais::where('status', 0)->get();

        return view('conteudos.canais.app_canais_pendentes', compact('user', 'canais'));
    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar canal';
        return view('conteudos.canais.app_registar_canal', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $canal = new Canais;
        $canal->nome = $request->nome;
        $canal->url = $request->url;
        $canal->tema_principal = $request->tema_principal;
        $canal->save();

        // redirecionar para a página inicial
        Alert::toast('canal Registado Com Sucesso', 'success');

        return redirect('/canais');
    }



    public function show($id)
    {
        $user = Auth::user();
        $canal = Canais::find($id);

        return view('conteudos.canais.app_visualizar_canal', compact('user','canal'));
    }

    public function aprovar($id)
    {
        $user = Auth::user();
        $canal = Canais::find($id);
        $canal->status = 1;
        $canal->save();

        Alert::toast('Canal Aprovado Com Sucesso', 'success');
        return back();
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $canal = Canais::find($id);

        return view('conteudos.canais.app_editar_canal', compact('user','canal'));
    }

    public function update(Request $request, $id)
    {
        //

        $canal = Canais::find($id);
        $canal->nome = $request->nome;

        $canal->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/canais');
    }


    public function destroy($id)
    {
        //
        Canais::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/canais');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/canais');
    }
}

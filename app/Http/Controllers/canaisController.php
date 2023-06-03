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

        $canais = Canais::all();

        return view('conteudos.canais.app_consulta', compact('user', 'canais'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar consulta';
        return view('conteudos.canais.app_registar_consulta', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $consulta = new Canais;
        $consulta->nome = $request->nome;

        // redirecionar para a página inicial
        Alert::toast('consulta Registado Com Sucesso', 'success');

        return redirect('/canais');
    }



    public function show($id)
    {
        $user = Auth::user();
        $consulta = Canais::find($id);

        return view('conteudos.canais.app_visualizar_consulta', compact('user','consulta'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $consulta = Canais::find($id);

        return view('conteudos.canais.app_editar_consulta', compact('user','consulta'));
    }

    public function update(Request $request, $id)
    {
        //

        $consulta = Canais::find($id);
        $consulta->nome = $request->nome;

        $consulta->save();

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

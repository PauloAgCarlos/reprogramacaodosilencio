<?php

namespace App\Http\Controllers;

use App\Models\Seeds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class seedsController extends Controller
{
    //

    public function index()
    {
        //
        $user = Auth::user();

        $seeds = seeds::all();


    }


    public function create()
    {
        //
        $user = Auth::user();

        // return view('conteudos.seeds.app_registar_seed', compact('user','fornecedores'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $seed = new seeds;
        $seed->links = $request->links;
        $seed->tema_principal = $request->tema_principal;
        $seed->sips = $request->sips;
        $seed->outras_palavras = $request->outras_palavras;
        $seed->tipo = $request->tipo;

        $seed->save();
 
        // redirecionar para a página inicial
        Alert::toast('seed Registado Com Sucesso', 'success');

        return redirect('/seeds');
    }



    public function show($id)
    {
        $user = Auth::user();
        $seed = seeds::find($id);

        return $seed;

        // return view('conteudos.seeds.app_visualizar_seed', compact('seed'));
    }


    public function edit($id)
    {
        //
        $seed = seeds::find($id);


        return $seed;
        // return view('conteudos.seeds.app_editar_seed', compact('organizacoes','seed'));
    }

    public function update(Request $request, $id)
    {
        //
        $seed = seeds::find($id);
        $seed->links = $request->links;
        $seed->tema_principal = $request->tema_principal;
        $seed->sips = $request->sips;
        $seed->outras_palavras = $request->outras_palavras;
        $seed->tipo = $request->tipo;

        $seed->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/seeds');
    }


    public function destroy($id)
    {
        //
        seeds::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/seeds');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/seeds');
    }
}

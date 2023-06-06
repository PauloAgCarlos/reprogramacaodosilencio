<?php

namespace App\Http\Controllers;

use App\Models\SeedsFavoritos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class seedsFavoritosController extends Controller
{
    //

    public function index()
    {
        //
        $user = Auth::user();

        $seedsFavoritos = SeedsFavoritos::all();

        return $seedsFavoritos;

    }


    public function create()
    {
        //
        $user = Auth::user();

        return 'registar seed';
        // return view('conteudos.seedsFavoritos.app_registar_seed', compact('user','fornecedores'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $seed = new SeedsFavoritos;
        $seed->profissional_id = $user->id;
        $seed->seed_id = $request->seed_id;
        $seed->cliente_id = $request->cliente_id;

        $seed->save();
 
        // redirecionar para a página inicial
        Alert::toast('seed Registado Com Sucesso', 'success');

        return redirect('/seedsFavoritos');
    }



    public function show($id)
    {
        $user = Auth::user();
        $seed = SeedsFavoritos::find($id);

        return $seed;

        // return view('conteudos.seedsFavoritos.app_visualizar_seed', compact('seed'));
    }


    public function edit($id)
    {
        //
        $seed = SeedsFavoritos::find($id);


        return $seed;
        // return view('conteudos.seedsFavoritos.app_editar_seed', compact('organizacoes','seed'));
    }

    public function update(Request $request, $id)
    {
        //
        $seed = SeedsFavoritos::find($id);
        $seed->profissional_id = $request->profissional_id;
        $seed->seed_id = $request->seed_id;
        $seed->cliente_id = $request->cliente_id;

        $seed->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/seedsFavoritos');
    }


    public function destroy($id)
    {
        //
        SeedsFavoritos::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/seedsFavoritos');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/seedsFavoritos');
    }
}

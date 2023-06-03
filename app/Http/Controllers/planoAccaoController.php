<?php

namespace App\Http\Controllers;

use App\Models\PlanoAccao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class planoAccaoController extends Controller
{
    public function index()
    {
        //
        $user = Auth::user();

        $planoAccao = PlanoAccao::all();

        return view('conteudos.planoAccao.app_planoAccao', compact('user', 'planoAccao'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar planoAccao';
        return view('conteudos.planoAccao.app_registar_planoAccao', compact('user'));
    }

    public function store(Request $request)
    {

        $table->integer('cliente_id');
            $table->string('seeds');

        //
        $user = Auth::user();

        $planoAccao = new PlanoAccao;
        $planoAccao->cliente_id = $request->cliente_id;
        $planoAccao->seeds = $request->seeds;
 

        // redirecionar para a página inicial
        Alert::toast('planoAccao Registado Com Sucesso', 'success');

        return redirect('/planoAccao');
    }



    public function show($id)
    {
        $user = Auth::user();
        $planoAccao = PlanoAccao::find($id);

        return view('conteudos.planoAccao.app_visualizar_planoAccao', compact('user','planoAccao'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $planoAccao = PlanoAccao::find($id);

        return view('conteudos.planoAccao.app_editar_planoAccao', compact('user','planoAccao'));
    }

        public function update(Request $request, $id)
    {
        //

        $planoAccao = PlanoAccao::find($id);
        $planoAccao->cliente_id = $request->cliente_id;
        $planoAccao->seeds = $request->seeds;
 

        $planoAccao->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/planoAccao');
    }


    public function destroy($id)
    {
        //
        PlanoAccao::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/planoAccao');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/planoAccao');
    }
}

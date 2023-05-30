<?php

namespace App\Http\Controllers;

use App\Models\Turmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class TurmasController extends Controller
{
    public function index()
    {
        //
        $user = Auth::user();

        $turmas = Turmas::all();

        return $turmas;

    }


    public function create()
    {
        //
        $user = Auth::user();

        return 'registar turma';
        // return view('conteudos.turmas.app_registar_turma', compact('user','fornecedores'));
    }

    public function store(Request $request)
    {

        //
        $user = Auth::user();

        $turma = new Turmas;
        $turma->nome = $request->nome;
        $turma->email = $request->email;
        $turma->cep = $request->cep;

        $turma->save();
 
        // redirecionar para a página inicial
        Alert::toast('turma Registado Com Sucesso', 'success');

        return redirect('/turmas');
    }



    public function show($id)
    {
        $user = Auth::user();
        $turma = Turmas::find($id);

        return $turma;

        // return view('conteudos.turmas.app_visualizar_turma', compact('turma'));
    }


    public function edit($id)
    {
        //
        $turma = Turmas::find($id);


        return $turma;
        // return view('conteudos.turmas.app_editar_turma', compact('organizacoes','turma'));
    }

    public function update(Request $request, $id)
    {
        //
        $turma = Turmas::find($id);
        $turma->nome = $request->nome;
        $turma->email = $request->email;
        $turma->cep = $request->cep;

        $turma->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/turmas');
    }


    public function destroy($id)
    {
        //
        Turmas::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/turmas');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/turmas');
    }
}

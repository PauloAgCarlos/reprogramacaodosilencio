<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class alunosController extends Controller
{
    //

    public function index()
    {
        //
        $user = Auth::user();

        $alunos = Alunos::all();

        return view('conteudos.alunos.app_aluno', compact('user', 'alunos'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar aluno';
        return view('conteudos.alunos.app_registar_aluno', compact('user'));
    }

    public function store(Request $request)
    {

        //
        $user = Auth::user();

        $aluno = new Alunos;
        $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->cpf = $request->cpf;
        $aluno->rg = $request->rg;
        $aluno->email = $request->email;
        $aluno->whatsapp = $request->whatsapp;
        $aluno->genero = $request->genero;
        $aluno->endereco_completo = $request->endereco_completo;
        $aluno->data_treinamento = $request->data_treinamento;
        $aluno->aceita_colocar_lista_licenciado = $request->aceita_colocar_lista_licenciado;

        // redirecionar para a página inicial
        Alert::toast('aluno Registado Com Sucesso', 'success');

        return redirect('/alunos');
    }



    public function show($id)
    {
        $user = Auth::user();
        $aluno = Alunos::find($id);

        return view('conteudos.alunos.app_visualizar_aluno', compact('user','aluno'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $aluno = Alunos::find($id);

        return view('conteudos.alunos.app_editar_aluno', compact('user','aluno'));
    }

        public function update(Request $request, $id)
    {
        //

        $aluno = Alunos::find($id);
        $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->cpf = $request->cpf;
        $aluno->rg = $request->rg;
        $aluno->email = $request->email;
        $aluno->whatsapp = $request->whatsapp;
        $aluno->genero = $request->genero;
        $aluno->endereco_completo = $request->endereco_completo;
        $aluno->data_treinamento = $request->data_treinamento;
        $aluno->aceita_colocar_lista_licenciado = $request->aceita_colocar_lista_licenciado;

        $aluno->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/alunos');
    }


    public function destroy($id)
    {
        //
        Alunos::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/alunos');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/alunos');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Certificados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class certificadosController extends Controller
{
    //

    public function index()
    {
        //
        $user = Auth::user();

        $certificados = Certificados::all();

        return view('conteudos.certificados.app_certificado', compact('user', 'certificados'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar certificado';
        return view('conteudos.certificados.app_registar_certificado', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $certificado = new Certificados;
        $certificado->id_aluno = $request->id_aluno;
        $certificado->id_instrutor = $request->id_instrutor;
        $certificado->nome_treinamento = $request->nome_treinamento;
        $certificado->data_conclusao = $request->data_conclusao;

        // redirecionar para a página inicial
        Alert::toast('certificado Registado Com Sucesso', 'success');

        return redirect('/certificados');
    }
    
    public function show($id)
    {
        $user = Auth::user();
        $certificado = Certificados::find($id);

        return view('conteudos.certificados.app_visualizar_certificado', compact('user','certificado'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $certificado = Certificados::find($id);

        return view('conteudos.certificados.app_editar_certificado', compact('user','certificado'));
    }

        public function update(Request $request, $id)
    {
        //

        $certificado = Certificados::find($id);
        $certificado->id_aluno = $request->id_aluno;
        $certificado->id_instrutor = $request->id_instrutor;
        $certificado->nome_treinamento = $request->nome_treinamento;
        $certificado->data_conclusao = $request->data_conclusao;

        $certificado->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/certificados');
    }


    public function destroy($id)
    {
        //
        Certificados::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/certificados');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/certificados');
    }
}

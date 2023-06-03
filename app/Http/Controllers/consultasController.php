<?php

namespace App\Http\Controllers;

use App\Models\Consultas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class consultasController extends Controller
{
    //
    public function index()
    {
        //  
        $user = Auth::user();

        $consultas = Consultas::all();

        return view('conteudos.consultas.app_consulta', compact('user', 'consultas'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar consulta';
        return view('conteudos.consultas.app_registar_consulta', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $consulta = new Consultas;
        $consulta->id_aluno = $request->id_aluno;
        $consulta->id_profissional = $request->id_profissional;
        $consulta->descricao = $request->descricao;
        $consulta->data_consulta = $request->data_consulta;

        // redirecionar para a página inicial
        Alert::toast('consulta Registado Com Sucesso', 'success');

        return redirect('/consultas');
    }



    public function show($id)
    {
        $user = Auth::user();
        $consulta = consultas::find($id);

        return view('conteudos.consultas.app_visualizar_consulta', compact('user','consulta'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $consulta = consultas::find($id);

        return view('conteudos.consultas.app_editar_consulta', compact('user','consulta'));
    }

        public function update(Request $request, $id)
    {
        //

        $consulta = consultas::find($id);
        $consulta->id_aluno = $request->id_aluno;
        $consulta->id_profissional = $request->id_profissional;
        $consulta->descricao = $request->descricao;
        $consulta->data_consulta = $request->data_consulta;

        $consulta->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/consultas');
    }


    public function destroy($id)
    {
        //
        consultas::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/consultas');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/consultas');
    }
}

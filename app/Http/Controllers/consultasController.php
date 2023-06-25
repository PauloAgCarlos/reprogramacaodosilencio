<?php

namespace App\Http\Controllers;

use App\Models\Consultas;
use App\Models\User;
use App\Models\Clientes;
use App\Models\Alunos;
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

        $clientes = Clientes::all();
        $profissionais = User::all();

        // return 'registar consulta';
        return view('conteudos.consultas.app_registar_consulta', compact('user', 'clientes', 'profissionais'));
    }

    public function create_por_cliente($id)
    {
        //
        $user = Auth::user();

        $cliente = Clientes::find($id);
        $profissionais = User::all();

        // return 'registar consulta';
        return view('conteudos.consultas.app_registar_consulta_por_cliente', compact('user', 'cliente', 'profissionais'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $consulta = new Consultas;
        $consulta->id_cliente = $request->id_cliente;
        $consulta->id_profissional = $user->id;
        $consulta->descricao = $request->descricao;
        $consulta->data_consulta = $request->data_consulta;

        $consulta->save();


        // redirecionar para a página inicial
        Alert::toast('consulta Registado Com Sucesso', 'success');

        return redirect('/consultas');
    }



    public function show($id)
    {
        $user = Auth::user();

        $consulta = Consultas::where('consultas.id', $id)
                    ->join('clientes', 'clientes.id','consultas.id_cliente')
                    ->join('users', 'users.id','consultas.id_profissional')
                    ->select('consultas.*','clientes.nome as nome_cliente','users.name as nome_profissional')
                    ->first();

        return view('conteudos.consultas.app_visualizar_consulta', compact('user','consulta'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $clientes = Clientes::all();
        $consulta = consultas::find($id);

        return view('conteudos.consultas.app_editar_consulta', compact('user', 'clientes', 'consulta'));
    }

        public function update(Request $request, $id)
    {
        //

        $consulta = Consultas::find($id);
        $consulta->id_aluno = $request->id_aluno;
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

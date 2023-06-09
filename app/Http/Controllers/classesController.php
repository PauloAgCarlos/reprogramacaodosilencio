<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class classesController extends Controller
{
    //
    public function index()
    {
        //  
        $user = Auth::user();

        $classes = Classes::all();

        return view('conteudos.classes.app_classe', compact('user', 'classes'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar classe';
        return view('conteudos.classes.app_registar_classe', compact('user'));
    }

    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $classe = new Classes;
        $classe->nome = $request->nome;
        $classe->data_inicio = $request->data_inicio;
        $classe->nivel = $request->nivel;
        $classe->endereco = $request->endereco;
        $classe->save();

        // redirecionar para a página inicial
        Alert::toast('classe Registado Com Sucesso', 'success');

        return redirect('/classes');
    }



    public function show($id)
    {
        $user = Auth::user();
        $classe = Classes::find($id);

        return view('conteudos.classes.app_visualizar_classe', compact('user','classe'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $classe = Classes::find($id);

        return view('conteudos.classes.app_editar_classe', compact('user','classe'));
    }

        public function update(Request $request, $id)
    {
        //

        $classe = Classes::find($id);
        $classe->nome = $request->nome;
        $classe->data_inicio = $request->data_inicio;
        $classe->nivel = $request->nivel;
        $classe->endereco = $request->endereco;

        $classe->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/classes');
    }


    public function destroy($id)
    {
        //
        Classes::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/classes');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/classes');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Profissionais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;


class ProfissionaisController extends Controller
{
    public function index()
    {
        //
        $user = Auth::user();

        $profissionais = Profissionais::all();

        return $profissionais;

    }


    public function create()
    {
        //
        $user = Auth::user();

        return 'registar profissional';
        // return view('conteudos.profissionais.app_registar_profissional', compact('user','fornecedores'));
    }

    public function store(Request $request)
    {

        //
        $user = Auth::user();

        $profissional = new Profissionais;
        $profissional->nome = $request->nome;
        $profissional->data_nascimento = $request->data_nascimento;
        $profissional->email = $request->email;
        $profissional->cep = $request->cep;

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $profissional->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/profissionais/imag_'.$profissional->id.'.'.$extensaoI);
            $profissional->foto = '/images/profissionais/imag_'.$profissional->id.'.'.$extensaoI;
            $profissional->save();
        }

        // redirecionar para a página inicial
        Alert::toast('profissional Registado Com Sucesso', 'success');

        return redirect('/profissionais');
    }



    public function show($id)
    {
        $user = Auth::user();
        $profissional = Profissionais::find($id);

        return $profissional;

        // return view('conteudos.profissionais.app_visualizar_profissional', compact('profissional'));
    }


    public function edit($id)
    {
        //
        $organizacoes = Organizacoes::all();
        $profissional = Profissionais::find($id);


        return $profissional;
        // return view('conteudos.profissionais.app_editar_profissional', compact('organizacoes','profissional'));
    }

        public function update(Request $request, $id)
    {
        //

        $profissional = Profissionais::find($id);
        $profissional->nome = $request->nome;
        $profissional->data_nascimento = $request->data_nascimento;
        $profissional->email = $request->email;
        $profissional->cep = $request->cep;

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $profissional->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/profissionais/imag_'.$profissional->id.'.'.$extensaoI);
            $profissional->foto = '/images/profissionais/imag_'.$profissional->id.'.'.$extensaoI;
            $profissional->save();
        }


        $profissional->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/profissionais');
    }


    public function destroy($id)
    {
        //
        Profissionais::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/profissionais');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/profissionais');
    }
}

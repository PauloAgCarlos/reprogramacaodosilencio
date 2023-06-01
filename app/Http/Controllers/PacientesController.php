<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;

class PacientesController extends Controller
{
    public function index()
    {
        //
        $user = Auth::user();

        $pacientes = Pacientes::all();

        return view('conteudos.pacientes.app_paciente', compact('user', 'pacientes'));

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar paciente';
        return view('conteudos.pacientes.app_registar_paciente', compact('user'));
    }

    public function store(Request $request)
    {

        //
        $user = Auth::user();

        $paciente = new Pacientes;
        $paciente->nome = $request->nome;
        $paciente->data_nascimento = $request->data_nascimento;
        $paciente->email = $request->email;
        $paciente->cep = $request->cep;
        

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $paciente->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/pacientes/imag_'.$paciente->id.'.'.$extensaoI);
            $paciente->foto = '/images/pacientes/imag_'.$paciente->id.'.'.$extensaoI;
            $paciente->save();
        }

        // redirecionar para a página inicial
        Alert::toast('paciente Registado Com Sucesso', 'success');

        return redirect('/pacientes');
    }



    public function show($id)
    {
        $user = Auth::user();
        $paciente = Pacientes::find($id);

        return view('conteudos.pacientes.app_visualizar_paciente', compact('user','paciente'));
    }


    public function edit($id)
    {
        //
        $user = Auth::user();
        $paciente = Pacientes::find($id);

        return view('conteudos.pacientes.app_editar_paciente', compact('user','paciente'));
    }

        public function update(Request $request, $id)
    {
        //

        $paciente = Pacientes::find($id);
        $paciente->nome = $request->nome;
        $paciente->data_nascimento = $request->data_nascimento;
        $paciente->email = $request->email;
        $paciente->cep = $request->cep;

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $paciente->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/pacientes/imag_'.$paciente->id.'.'.$extensaoI);
            $paciente->foto = '/images/pacientes/imag_'.$paciente->id.'.'.$extensaoI;
            $paciente->save();
        }


        $paciente->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/pacientes');
    }


    public function destroy($id)
    {
        //
        Pacientes::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/pacientes');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/pacientes');
    }
}

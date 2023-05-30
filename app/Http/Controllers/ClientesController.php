<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;
use Alert;



class ClientesController extends Controller
{
    public function index()
    {
        //
        $user = Auth::user();

        $clientes = Clientes::all();

        return $clientes;

    }


    public function create()
    {
        //
        $user = Auth::user();

        // return 'registar cliente';
        return view('conteudos.clientes.app_registar_cliente', compact('user'));
    }

    public function store(Request $request)
    {

        //
        $user = Auth::user();

        $cliente = new Clientes;
        $cliente->nome = $request->nome;
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->email = $request->email;
        $cliente->cep = $request->cep;

        

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $cliente->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/clientes/imag_'.$cliente->id.'.'.$extensaoI);
            $cliente->foto = '/images/clientes/imag_'.$cliente->id.'.'.$extensaoI;
            $cliente->save();
        }

        // redirecionar para a página inicial
        Alert::toast('cliente Registado Com Sucesso', 'success');

        return redirect('/clientes');
    }



    public function show($id)
    {
        $user = Auth::user();
        $cliente = Clientes::find($id);

        return $cliente;

        // return view('conteudos.clientes.app_visualizar_cliente', compact('cliente'));
    }


    public function edit($id)
    {
        //
        $cliente = Clientes::find($id);


        return $cliente;
        // return view('conteudos.clientes.app_editar_cliente', compact('organizacoes','cliente'));
    }

        public function update(Request $request, $id)
    {
        //

        $cliente = Clientes::find($id);
        $cliente->nome = $request->nome;
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->email = $request->email;
        $cliente->cep = $request->cep;

        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }
        }

         $cliente->save();
        // Guardar a foto na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/images/clientes/imag_'.$cliente->id.'.'.$extensaoI);
            $cliente->foto = '/images/clientes/imag_'.$cliente->id.'.'.$extensaoI;
            $cliente->save();
        }


        $cliente->save();

        // redirecionar para a página inicial
        Alert::toast('Registo Actualizado Com Sucesso', 'success');

        return redirect('/clientes');
    }


    public function destroy($id)
    {
        //
        Clientes::destroy($id);
        Alert::toast('Registo Eliminado Com Sucesso', 'success');

        return redirect('/clientes');
    }

    public function pesquisar()
    {
        //
        return 'A página está a ser trabalhada...';

        return redirect('/clientes');
    }
}

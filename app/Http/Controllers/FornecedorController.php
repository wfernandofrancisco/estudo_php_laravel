<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }

    public function listar(Request $request){

        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->get();

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores]);
    }

    public function adicionar(Request $request){
        $msg = '';
        if($request->input('_token') != ''){

            $regras = [
                'nome' => 'min:3|max:40',
                'site' => 'required',
                'uf' => 'min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo uf deve ter  2 caracteres',
                'uf.min' => 'O campo uf deve ter  2 caracteres',
                'email.email' => 'O campo email não foi preenchido corretamente',
            ];
            
            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();

            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso';

        }
       
        return view('app.fornecedor.adicionar',['msg' => $msg]);
    }
}

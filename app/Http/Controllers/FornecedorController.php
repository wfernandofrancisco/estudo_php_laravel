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
            ->paginate(2);

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all() ]);
    }

    public function adicionar(Request $request){
        $msg = '';
        if($request->input('_token') != '' && $request->input('id') == ''){

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

        if($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());
            if($update){
                $msg = "Update Ok";
            }else{
                $msg = "Erro Update";
            }
            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg]);
            
        }
       
        return view('app.fornecedor.adicionar',['msg' => $msg]);
    }

    public function editar($id, $msg = ''){
        $fornecedor = Fornecedor::find($id);
        return view('app.fornecedor.adicionar',['fornecedor' => $fornecedor, 'msg' => $msg]);
    }

    public function excluir($id){
        $fornecedor = Fornecedor::find($id)->delete();
        return redirect()->route('app.fornecedor.index');
    }
}

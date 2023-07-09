<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 01',
                'status' => 'A',
                'uf' => 'SP'
            ],
            1 => [
                'nome' => 'Fornecedor 02',
                'status' => 'I'
            ],

        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}

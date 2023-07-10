<?php

use Illuminate\Database\Seeder;
use \App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->email_alternativo = 'e100';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'uf' => 'BA',
            'email' => 'contato200forn@hotmail.com',
            'email_alternativo' => 'e200'
        ]);
    }
}

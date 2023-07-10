<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$contato = new SiteContato();
        $contato->name = 'William';
        $contato->telefone = '(19) 99999-9999';
        $contato->email = 'contato@contato.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Olá Mundo.';
        $contato->save();*/
        factory(SiteContato::class,100)->create();

    }
}

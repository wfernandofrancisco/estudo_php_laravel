<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){

       // $contato = new SiteContato();
        /*$contato->name = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();*/
        //$contato->fill($request->all());
        
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato 2', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
        $request->validate(
            [
            'name' => 'required|min:3|max:40|unique:site_contatos',
            'email' => 'email',
            ],
            [
                
                'required' => 'O campo :attribute deve ser preenchido'
            ]
        );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}

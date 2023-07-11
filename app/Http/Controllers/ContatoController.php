<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\SiteContato;

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
       
        return view('site.contato', ['titulo' => 'Contato 2']);
    }

    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required|min:3|max:40'
        ]);
    }
}

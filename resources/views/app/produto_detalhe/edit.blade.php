@extends('app.layouts.basico')

@section('titulo', 'Produto Detalhe Editar')

@section('conteudo')

<br><br>

<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Editar Produto Detalhe</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="#" class="btn btn-primary"> Voltar</a>
    </div>
</div>

<div class="container">

    <div class="row mt-3">
        <h5><b>Produto</b></h5>
        <div class=""><b>Nome:</b> {{$produto_detalhe->produto->nome}}</div>
        <br>
        <div class=""><b>Descrição:</b> {{$produto_detalhe->produto->descricao}}</div>
    </div>

    <div class="row mt-3">
        @component('app.produto_detalhe._components.formulario',['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades])
        @endcomponent
    </div>
</div>

@endsection
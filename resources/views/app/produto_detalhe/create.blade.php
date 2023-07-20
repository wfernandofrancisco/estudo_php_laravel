@extends('app.layouts.basico')

@section('titulo', 'Detalhes do produto')

@section('conteudo')

<br><br>

<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Adicionar Detalhes do Produto</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="#" class="btn btn-primary"> Voltar</a>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        @component('app.produto_detalhe._components.formulario',['unidades' => $unidades])
        @endcomponent
    </div>
</div>

@endsection
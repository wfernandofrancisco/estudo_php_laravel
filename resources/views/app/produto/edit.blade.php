@extends('app.layouts.basico')

@section('titulo', 'Produto Editar')

@section('conteudo')

<br><br>

<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Editar Produto</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="{{route('produto.index')}}" class="btn btn-primary"> Voltar</a>
    </div>
    <div class="col-md-1"  align="right">
        <a href="" class="btn btn-info"> Consulta</a>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        @component('app.produto._components.formulario',['produto' => $produto, 'unidades' => $unidades, 'fornecedores' => $fornecedores])
        @endcomponent
    </div>
</div>

@endsection
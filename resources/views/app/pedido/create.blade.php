@extends('app.layouts.basico')

@section('titulo', 'Pedido Adicionar')

@section('conteudo')

<br><br>

<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Adicionar Pedido</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="{{route('pedido.index')}}" class="btn btn-primary"> Voltar</a>
    </div>
    <div class="col-md-1"  align="right">
        <a href="" class="btn btn-info"> Consulta</a>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        @component('app.pedido._components.formulario', ['clientes' => $clientes])
        @endcomponent
    </div>
</div>

@endsection
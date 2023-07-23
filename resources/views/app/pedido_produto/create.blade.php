@extends('app.layouts.basico')

@section('titulo', 'Adicionar Produtos ao Pedido')

@section('conteudo')

<br><br>

<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Adicionar Produtos ao Pedido</h4>
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
       <h4>Detalhes do pedido</h4>
       <h6>Id do pedido: {{$pedido->id}}</h6>
       <h6>Cliente: {{$pedido->cliente_id}}</h6>
       <hr>
    </div>
    <div class="row">
        <h4>Itens do pedido</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Produto</td>
                    <td>Data Inclusao</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedido->produtos as $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->pivot->created_at->format('d/m/Y')}}</td>
                        <td>
                            <form method="post" action="{{route('pedido-produtos.destroy', ['pedidoProduto' => $produto->pivot->id])}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-link text-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
        <hr>
        <br> 
        <h4>Adicionar produto ao pedido</h4>
        @component('app.pedido_produto._components.formulario', ['pedido' => $pedido, 'produtos' => $produtos])
        @endcomponent
        <hr>
    </div>
</div>

@endsection
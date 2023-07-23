@extends('app.layouts.basico')

@section('titulo', 'Pedido Listar')

@section('conteudo')
<br><br>
<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Lista de Pedidos</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="{{route('pedido.create')}}" class="btn btn-primary"> Novo</a>
    </div>
    <div class="col-md-1"  align="right">
        <a href="" class="btn btn-info"> Consulta</a>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>Id </th>
                    <th>Id Cliente</th>
                    <th>Adicionar Produtos</th>
                    <th>Editar</th>
                    <th>Visualizar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                     <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->cliente_id}}</td>
                        <td><a href="{{route('pedido-produto.create',['pedido' => $pedido->id])}}" class="btn btn-link text-warning"> Add Produto</a></td>
                        <td><a href="{{route('pedido.show',['pedido' => $pedido->id])}}" class="btn btn-link text-info"> Visualizar</a></td>
                        <td><a href="{{route('pedido.edit',['pedido' => $pedido->id])}}" class="btn btn-link text-primary"> Editar</a></td>
                        <td>
                            <form method="post" action="{{route('pedido.destroy',['pedido' => $pedido->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$pedidos->appends($request)->links()}}
        <br>
        <label>Exibibindo {{$pedidos->count()}} pedidos de {{$pedidos->total()}} (de {{$pedidos->firstItem()}} a {{$pedidos->lastItem()}}) </label>
    </div>
</div>
@endsection
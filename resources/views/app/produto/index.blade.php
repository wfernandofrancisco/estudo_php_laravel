@extends('app.layouts.basico')

@section('titulo', 'Produto Listar')

@section('conteudo')
<br><br>
<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Lista de Produtos</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="{{route('produto.create')}}" class="btn btn-primary"> Novo</a>
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
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th>Fornecedor</th>
                    <th>Peso</th>
                    <th>Unidade Id</th>
                    <th>Comprimento</th>
                    <th>Largura</th>
                    <th>Altura</th>
                    <th>Visualizar</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                     <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>{{$produto->fornecedor->nome}}</td>
                        <td>{{$produto->peso}}</td>
                        <td>{{$produto->unidade_id}}</td>
                        <td>{{$produto->produtoDetalhe->comprimento ?? ''}}</td>
                        <td>{{$produto->produtoDetalhe->largura ?? ''}}</td>
                        <td>{{$produto->produtoDetalhe->altura ?? ''}}</td>
                        <td><a href="{{route('produto.show',['produto' => $produto->id])}}" class="btn btn-link text-info"> Visualizar</a></td>
                        <td><a href="{{route('produto.edit',['produto' => $produto->id])}}" class="btn btn-link text-primary"> Editar</a></td>
                        <td>
                            <form method="post" action="{{route('produto.destroy',['produto' => $produto->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$produtos->appends($request)->links()}}
        <br>
        <label>Exibibindo {{$produtos->count()}} produtos de {{$produtos->total()}} (de {{$produtos->firstItem()}} a {{$produtos->lastItem()}}) </label>
    </div>
</div>
@endsection
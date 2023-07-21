@extends('app.layouts.basico')

@section('titulo', 'Cliente Listar')

@section('conteudo')
<br><br>
<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Lista de Clientes</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="{{route('cliente.create')}}" class="btn btn-primary"> Novo</a>
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
                    <th>Nome</th>
                    <th>Visualizar</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                     <tr>
                        <td>{{$cliente->nome}}</td>
                        <td><a href="{{route('cliente.show',['cliente' => $cliente->id])}}" class="btn btn-link text-info"> Visualizar</a></td>
                        <td><a href="{{route('cliente.edit',['cliente' => $cliente->id])}}" class="btn btn-link text-primary"> Editar</a></td>
                        <td>
                            <form method="post" action="{{route('cliente.destroy',['cliente' => $cliente->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$clientes->appends($request)->links()}}
        <br>
        <label>Exibibindo {{$clientes->count()}} clientes de {{$clientes->total()}} (de {{$clientes->firstItem()}} a {{$clientes->lastItem()}}) </label>
    </div>
</div>
@endsection
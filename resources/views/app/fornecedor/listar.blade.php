@extends('app.layouts.basico')

@section('titulo', 'Fornecedor Listar')

@section('conteudo')
<br><br>
<div class="row mt-5" align="right">
    <div class="col-md-8">
    </div>
    <div class="col-md-1">
        <a href="{{route('app.fornecedor.adicionar')}}" class="btn btn-primary"> Novo</a>
    </div>
    <div class="col-md-1">
        <a href="{{route('app.fornecedor.index')}}" class="btn btn-info"> Consulta</a>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>Fornecedor</th>
                    <th>UF</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fornecedores as $fornecedor)
                     <tr>
                        <td>{{$fornecedor->nome}}</td>
                        <td>{{$fornecedor->uf}}</td>
                        <td>{{$fornecedor->email}}</td>
                        <td><a href="{{route('app.fornecedor.editar', $fornecedor->id)}}" class="btn btn-link text-primary"> Editar</a></td>
                        <td><a href="{{route('app.fornecedor.excluir',  $fornecedor->id)}}" class="btn btn-link text-danger"> Excluir</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$fornecedores->appends($request)->links()}}
       
        <br>
        <label>Exibibindo {{$fornecedores->count()}} fornecedores de {{$fornecedores->total()}} (de {{$fornecedores->firstItem()}} a {{$fornecedores->lastItem()}}) </label>
    </div>
</div>
@endsection
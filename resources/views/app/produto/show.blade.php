@extends('app.layouts.basico')

@section('titulo', 'Produto Visualizar')

@section('conteudo')
<br><br>
<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Visualizar Produto</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="{{route('produto.index')}}" class="btn btn-primary"> Voltar</a>
    </div>
    <div class="col-md-1"  align="right">
        <a href="" class="btn btn-info"> Consulta</a>
    </div>
</div>

<div class="container mt-3">
    <table class="table table-bordered">
        <tr>
            <td>ID:</td>
            <td>{{$produto->id}}</td>
        </tr>
        <tr>
            <td>Nome:</td>
            <td>{{$produto->nome}}</td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td>{{$produto->descricao}}</td>
        </tr>
        <tr>
            <td>Peso:</td>
            <td>{{$produto->peso}}</td>
        </tr>
        <tr>
            <td>Unidade Medida:</td>
            <td>{{$produto->unidade_id}}</td>
        </tr>
    </table>

</div>
@endsection
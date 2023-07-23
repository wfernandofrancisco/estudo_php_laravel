@extends('app.layouts.basico')

@section('titulo', 'Cliente Visualizar')

@section('conteudo')
<br><br>
<div class="row mt-5">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4>Visualizar Cliente</h4>
    </div>
    <div class="col-md-1"  align="right">
        <a href="{{route('cliente.index')}}" class="btn btn-primary"> Voltar</a>
    </div>
    <div class="col-md-1"  align="right">
        <a href="" class="btn btn-info"> Consulta</a>
    </div>
</div>

<div class="container mt-3">
    <table class="table table-bordered">
        <tr>
            <td>ID:</td>
            <td>{{$cliente->id}}</td>
        </tr>
        <tr>
            <td>Nome:</td>
            <td>{{$cliente->nome}}</td>
        </tr>
    </table>

</div>
@endsection
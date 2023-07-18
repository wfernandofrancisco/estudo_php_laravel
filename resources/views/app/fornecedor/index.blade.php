@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<br><br>
<div class="row mt-5" align="right">
    <div class="col-md-10">
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
    <form method="post" action="{{route('app.fornecedor.listar')}}">
        @csrf
        <div class="col-md-12">
            <label> Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="col-md-12">
            <label> UF</label>
            <input type="text" class="form-control" name="uf">
        </div>
        <div class="col-md-12">
            <label> E-mail</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="col-md-12 mt-2">
            <button class="btn btn-success"> Consultar</button>
        </div>
    </form>
    </div>
</div>
@endsection
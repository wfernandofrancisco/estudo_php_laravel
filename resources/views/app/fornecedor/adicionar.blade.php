@extends('app.layouts.basico')

@section('titulo', 'Fornecedor Adicionar')

@section('conteudo')
<br><br>
<div class="row mt-5" align="right">
    <div class="col-md-8">
    </div>
    <div class="col-md-1">
        <a href="{{route('app.fornecedor.adicionar')}}" class="btn btn-primary"> Novo</a>
    </div>
    <div class="col-md-1">
        <a href="{{route('app.fornecedor.listar')}}" class="btn btn-info"> Consulta</a>
    </div>
</div>

<div class="container">
    <div class="row mt-3">{{$msg}}</div>
    <div class="row mt-3">
        <form method="post" action="{{route('app.fornecedor.adicionar')}}">
            @csrf
            <div class="col-md-12">
                <label> Nome</label>
                <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
                {{ $errors->has('nome') ? $errors->first('nome') : '' }}
            </div>
            <div class="col-md-12">
                <label> Site</label>
                <input type="text" class="form-control" name="site" value="{{old('site')}}">
                {{ $errors->has('site') ? $errors->first('site') : '' }}
            </div>
            <div class="col-md-12">
                <label> UF</label>
                <input type="text" class="form-control" name="uf" value="{{old('uf')}}">
                {{ $errors->has('uf') ? $errors->first('uf') : '' }}
            </div>
            <div class="col-md-12">
                <label> E-mail</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                {{ $errors->has('email') ? $errors->first('email') : '' }}
            </div>
            <div class="col-md-12">
                <label>Codigo</label>
                <input type="text" class="form-control" name="email_alternativo" value="{{old('email_alternativo')}}">
            </div>
            <div class="col-md-12 mt-2">
                <button class="btn btn-success"> Adicionar</button>
            </div>
        </form>
    </div>
</div>
@endsection
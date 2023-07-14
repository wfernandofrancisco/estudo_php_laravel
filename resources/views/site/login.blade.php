@extends('site.layouts.basico')
@section('titulo', $titulo)
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left:auto; margin-right:auto;">
                <form action={{ route('site.login') }} method="post">
                    @csrf
                    <label>Usuario</label>
                    <input name="usuario" value="{{old('usuario')}}" type="text" class="borda-preta">
                    <label style="color:red;"> {{$errors->has('usuario') ? $errors->first('usuario') : '' }} </label>
                    <br>
                    <label>Senha</label>
                    <input name="senha" value="{{old('senha')}}" type="password" class="borda-preta">
                    <label style="color:red;"> {{$errors->has('senha') ? $errors->first('senha') : '' }} </label>
                    <br>
                    <button type="submit" class="borda-preta"> Acessar </button>
                </form>
            </div>
        </div>  
    </div>
@endsection()


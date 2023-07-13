@extends('site.layouts.basico')
@section('titulo', $titulo)
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato',['motivo_contatos' => $motivo_contatos])
                <p>Formulario de Contato</p>
                @endcomponent
            </div>
        </div>  
    </div>
@endsection()


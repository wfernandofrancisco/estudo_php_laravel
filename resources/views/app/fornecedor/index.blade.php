<h4>Fornecedor</h4>
<hr>


@if( count($fornecedores) > 0 && count($fornecedores) < 5 )
    <h6>Existem alguns fornecedores</h6>
@elseif( count($fornecedores) > 5 )
    <h6>Existem vários fornecedores</h6>
@else 
    <h6>Não existem fornecedores</h6>
@endif

<br>
@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        UF: {{$fornecedores[$i]['uf'] ?? 'UF não informado'}}
        <br>
        Situação:
        @switch($fornecedores[$i]['status'])
            @case('A')
                Ativo
                @break
            @case('I')
                Inativo
                @break
        @endswitch
        <br><hr>
    @endfor
@endisset

<h3>Feito com foreach</h3>
<br>

@foreach ($fornecedores as $fornecedor)
    Fornecedor: {{$fornecedor['nome']}}
    <br>
    UF: {{$fornecedor['uf'] ?? 'UF não informado'}}
    <br>
    Situação:
    @switch($fornecedor['status'])
        @case('A')
            Ativo
            @break
        @case('I')
            Inativo
            @break
    @endswitch
    <br><hr>
@endforeach

<br>


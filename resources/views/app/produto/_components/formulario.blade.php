@if(isset($produto->id))
    <form method="post" action="{{route('produto.update', ['produto' => $produto->id])}}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{route('produto.store')}}">
        @csrf
@endif
    <div class="col-md-12">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $produto->nome ?? old('nome') }}">
        <label class="text-danger"> {{ $errors->has('nome') ? $errors->first('nome') : '' }} </label>
    </div>
    <div class="col-md-12">
        <label>Descrição</label>
        <input type="text" class="form-control" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}">
        <label class="text-danger"> {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}</label>
    </div>
    <div class="col-md-12">
        <label>Peso</label>
        <input type="text" class="form-control" name="peso" value="{{ $produto->peso ?? old('peso') }}">
        <label class="text-danger"> {{ $errors->has('peso') ? $errors->first('peso') : '' }}</label>
    </div>
    <div class="col-md-12">
        <label>Unidade</label>
        <select class="form-control" name="unidade_id">
            <option>-- Selecionar --</option>
            @foreach ($unidades as $unidade)
                    <option value="{{$unidade->id}}" {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : ''  }}  >{{$unidade->descricao}}</option>   
            @endforeach
        </select>
        <label class="text-danger"> {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}</label>
    </div>
    <div class="col-md-12 mt-2">
        <button class="btn btn-success"> Salvar </button>
    </div>
</form>
@if(isset($produto_detalhe->id))
    <form method="post" action="{{route('produto.update', ['produto' => $produto_detalhe->id])}}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{route('produto-detalhe.store')}}">
        @csrf
@endif
    <div class="col-md-12">
        <label>ID Produto</label>
        <input type="text" class="form-control" name="produto_id" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}">
        <label class="text-danger"> {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }} </label>
    </div>
    <div class="col-md-12">
        <label>Comprimento</label>
        <input type="text" class="form-control" name="comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}">
        <label class="text-danger"> {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}</label>
    </div>
    <div class="col-md-12">
        <label>Largura</label>
        <input type="text" class="form-control" name="largura" value="{{ $produto_detalhe->largura ?? old('largura') }}">
        <label class="text-danger"> {{ $errors->has('largura') ? $errors->first('largura') : '' }}</label>
    </div>
    <div class="col-md-12">
        <label>Altura</label>
        <input type="text" class="form-control" name="altura" value="{{ $produto_detalhe->altura ?? old('altura') }}">
        <label class="text-danger"> {{ $errors->has('altura') ? $errors->first('altura') : '' }}</label>
    </div>
    <div class="col-md-12">
        <label>Unidade</label>
        <select class="form-control" name="unidade_id">
            <option>-- Selecionar --</option>
            @foreach ($unidades as $unidade)
                    <option value="{{$unidade->id}}" {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : ''  }}  >{{$unidade->descricao}}</option>   
            @endforeach
        </select>
        <label class="text-danger"> {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}</label>
    </div>
    <div class="col-md-12 mt-2">
        <button class="btn btn-success"> Salvar </button>
    </div>
</form>
<form method="post" action="{{route('pedido-produto.store', ['pedido' => $pedido])}}">
    @csrf
    <div class="col-md-12">
        <label>Produtos</label>
        <select class="form-control" name="produto_id">
            <option>-- Selecionar --</option>
            @foreach ($produtos as $produto)
                    <option value="{{$produto->id}}" {{(old('produto_id')) == $produto->id ? 'selected' : ''  }}  >{{$produto->nome}}</option>   
            @endforeach
        </select> 
        <label class="text-danger"> {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}</label>
    </div>
    <div class="col-md-12">
        <label>Quantidade</label>
        <input type="number" class="form-control" name="quantidade" value="{{ old('quantidade') ? old('quantidade') : '' }}">
        <label class="text-danger"> {{ $errors->has('quantidade') ? $errors->first('quantidade') : '' }}</label>
    </div>
    <div class="col-md-12 mt-2">
        <button class="btn btn-success"> Salvar </button>
    </div>
</form>
@if(isset($pedido->id))
    <form method="post" action="{{route('pedido.update', ['pedido' => $pedido->id])}}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{route('pedido.store')}}">
        @csrf
@endif
    <div class="col-md-12">
        <label>Cliente</label>
        <select class="form-control" name="cliente_id">
            <option>-- Selecionar --</option>
            @foreach ($clientes as $cliente)
                    <option value="{{$cliente->id}}" {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : ''  }}  >{{$cliente->nome}}</option>   
            @endforeach
        </select> 
        <label class="text-danger"> {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}</label>
    </div>
    <div class="col-md-12 mt-2">
        <button class="btn btn-success"> Salvar </button>
    </div>
</form>
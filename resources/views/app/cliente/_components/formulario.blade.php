@if(isset($cliente->id))
    <form method="post" action="{{route('cliente.update', ['cliente' => $cliente->id])}}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{route('cliente.store')}}">
        @csrf
@endif
    <div class="col-md-12">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $cliente->nome ?? old('nome') }}">
        <label class="text-danger"> {{ $errors->has('nome') ? $errors->first('nome') : '' }} </label>
    </div>
    <div class="col-md-12 mt-2">
        <button class="btn btn-success"> Salvar </button>
    </div>
</form>
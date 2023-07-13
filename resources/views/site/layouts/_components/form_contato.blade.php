<form action={{route('site.contato')}} method="post">
    @csrf
    <input name="name" value="{{old('name')}}" type="text" placeholder="Nome" class="borda-preta">
    <label style="color:#DE8A8A">{{$errors->has('name') ? $errors->first('name') : ''}}</label>
    <br>
    <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="motivo_contatos_id" class="borda-preta">
            <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato )
            <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}} >{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    <br>
    <textarea class="borda-preta" name="mensagem">{{old('mensagem')}}</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

@if($errors->any())
    <div class="row mt-5" style="bottom:0px;background-color:#DE8A8A" >
        @foreach ($errors->all() as $erro)
            {{$erro}}
            <br>
        @endforeach
    </div>
@endif
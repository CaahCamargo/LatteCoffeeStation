@extends('app')

@section('title', 'Latte Coffee Station')

@section('conteudo')

  <form>
        <label for="nome">Nome</label>
        <input type="name" class="form-control" id="nome">

        <label for="sobrenome">Sobrenome</label>
        <input type="name" class="form-control" id="sobrenome">

        <label for="email">E-mail</label>
        <input type="name" class="form-control" id="email">

        <label for="endereco">Logradouro</label>
        <input type="name" class="form-control" id="endereco">
        
        <label for="cidade">Cidade</label>
        <input type="name" class="form-control" id="cidade">

        <label for="estado">Estado</label>
        <select class="form-control" id="estado">
          <option>AC</option>
          <option>AL</option>
          <option>AM</option>
          <option>AP</option>
          <option>BA</option>
          <option>CE</option>
          <option>DF</option>
          <option>ES</option>
          <option>GO</option>
          <option>MA</option>
          <option>MG</option>
          <option>MS</option>
          <option>MT</option>
          <option>PA</option>
          <option>PB</option>
          <option>PE</option>
          <option>PI</option>
          <option>PR</option>
          <option>RJ</option>
          <option>RN</option>
          <option>RO</option>
          <option>RR</option>
          <option>RS</option>
          <option>SC</option>
          <option>SE</option>
          <option>SP</option>
          <option>TO</option>
        </select>

        <label for="cep">CEP</label>
        <input type="name" class="form-control" id="cep">
  </form>
@endsection
@extends('app')

@section('title', 'Latte Coffee Station')

@section('conteudo')

<h3>Monte seu Box</h3>

<form action="{{route('box.store')}}" method="post">
  <label for="torra">Escolha um tipo de Torra</label>
  <select id="torra">
    <option value="clara">Clara</option>
    <option value="media">Média</option>
    <option value="escura">Escura</option>
  </select>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Receber Café em Graos
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Receber Café em Capsulas
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Café tipo Espresso 
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Café tipo irish 
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Café tipo latte 
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Café tipo macchiato 
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Café tipo mocha 
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Café Gelado 
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Café tipo Cappuccino 
    </label>
  </div>

  <textarea name="observacoes" id="" cols="30" rows="10">Caso possua alguma intolerancia ou deseja um tipo especifico de café, informe para a gente!</textarea>

  <button type="submit">Salvar</button>
</form>
@endsection
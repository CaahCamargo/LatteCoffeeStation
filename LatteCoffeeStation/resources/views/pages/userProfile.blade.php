@extends('app')

@section('title', 'Latte Coffee Station')

@section('conteudo')
<section>
    <h4>Bem vindo de volta a estação</h4>
    <a>Editar Minhas Informações</a>
</section>
<section>
    <h5>Dados Pessoais</h5>
    <p>Nome</p>
    
    <p>E-mail</p>
    
    <p>Logradouro</p>
    
    <p>Cidade</p>
    
    <p>Estado</p>o">
    
    <p>CEP</p>
</section>
<section>
    <h5>Minhas Escolhas</h5>

    <p>Tipo de Torra {{$box->torra}}</p>

    <p>Receber Café em Graos {{$box->graos}}</p>

    <p>Receber Café em Capsulas {{$box->capsula}}</p>

    <p>Café tipo Espresso {{$box->espresso}}</p>

    <p>Café tipo irish {{$box->irish}} </p>

    <p>Café tipo latte {{$box->latte}}</p>

    <p> Café tipo macchiato {{$box->macchiato}}</p>

    <p> Café tipo mocha {{$box->mocha}}</p>

    <p>Café Gelado {{$box->cGelado}}</p>

    <p>Café tipo Cappuccino {{$box->cappuccino}}</p>

    <p>Observaçoes: {{$box->observacoes}}</p>
</section>
@endsection
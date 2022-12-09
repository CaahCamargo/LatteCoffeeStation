@extends('app')

@section('title', 'Latte Coffee Station')

@section('conteudo')
@csrf
<section class="Hero">
    <div>
        <img class="imgHero" src="images/cafeGraos.png" alt="Graos de Café">
    </div>

    <div class="textHero">
        <h3 class="primaryTitle">Latte Coffee Station</h3>
        <p>De quem <span>entende</span> para quem <span>ama</span> café</p>
    </div>
</section>
<section class="AboutCoffee">
    <h3 class="primaryTitle">Café para todos os Momentos</h3>
    <div class="gridCardsCoffee">
        <div class="cardsCoffee">
            <h5 class="primaryTitle">Café em Pó</h5>
            <p>Praticidade para todos os Momentos</p>
            <img class="imgCardsCoffee" src="/images/cafePo.jpg" alt="Café em Pó">
        </div>

        <div class="cardsCoffee">
            <h5 class="primaryTitle">Café com Leite</h5>
            <p>Para quem não abre mão de um cafézinho</p>
            <img class="imgCardsCoffee" src="/images/cafeLeite.jpg" alt=" Café com Leite">
        </div>

        <div class="cardsCoffee">
            <h5 class="primaryTitle">Café em Grãos</h5>
            <p>Para quem ama o cheirinho de café fresquinho </p>
            <img class="imgCardsCoffee" src="/images/cafeGraos.jpg" alt="Café Graos">
        </div>

        <div class="cardsCoffee">
            <h5 class="primaryTitle">Café Gelado</h5>
            <p>Para resfrescar o seu dia com cafézinho</p>
            <img class="imgCardsCoffee" src="/images/cafeGelado.jpg" alt="Café Gelado">
        </div>
    </div>
</section>
<section class="Torrefacao" id="section1">
    <h3 class="primaryTitle">Conheça a Torra do Café</h3>
    <div class="AboutTorrefacao">
        <div>
            <h6 class="primaryTitle">TORRA CLARA DO CAFÉ</h6>
            <p>Acentua acidez e aroma com suavidade do sabor. Ameniza o amargor e o corpo.  A torra clara preserva mais os óleos aromáticos (grãos permanecem secos), mas acentua a acidez da bebida ao mesmo tempo que produz um café gourmet menos encorpado. Ideal para máquinas de café expresso.</p>
        </div>

        <div>
            <h6 class="primaryTitle">TORRA MÉDIA DO CAFÉ</h6>
            <p>Ponto de equilíbrio entre várias características como acidez, aroma e amargor.  Normalmente acentua o corpo.  Porém, o café gourmet começa a ficar menos encorpado com torras mais escuras. Ideal para coador de pano ou filtro de papel.</p>
        </div>

        <div>
            <h6 class="primaryTitle">TORRA ESCURA DO CAFÉ</h6>
            <p> Café menos ácido, mais amargo e menos encorpado.  Torra mais escura deixa o café gourmet mais amargo o que pode ser confundido com um café “mais forte”.   Porém, a torra muito escura pode “queimar” o café, acentuando muito o amargor e praticamente eliminando a acidez e o corpo.</p>
        </div>
    </div>
</section>
<section class="ToastFriends">
    <div class="textToastFriends">
        <h3 class="primaryTitle">Para todos os Momentos</h3>
        <p>Seja para reúnir a família, os amigos ou para começar seu dia, A Latte Coffee Station tem planos personalisados para você. Receba e experimente cafés exclusivos nacionais e internacionais e milhares de combinações para saborear da maneira que desejar </p>
    </div>
    <img src="/images/FriendsCoffee.jpg" alt="Brinde Café">
</section>
<section class="OurPlans" id="section2">
    <h3 class="primaryTitle">Monte o seu Plano exclusivo</h3>
    <div class="aboutPlans">
        <div>
            <img src="/images/ramaCafe.png" alt="Rama de Café">
            <h5 class="primaryTitle">Escolha suas Preferências</h5>
            <p>Escolha o que deseja receber e monte seu perfil</p>
        </div>
        <div>
            <img src="/images/homemGraos.png" alt="Homem com Grãos de Café">
            <h5 class="primaryTitle">Nós nos Responsabilizamos</h5>
            <p>A partir das suas escolhas nós montaremos um kit exclusivo para você</p>
        </div>
        <div>
            <img src="/images/pacoteCafe.png" alt="Pacote de Café">
            <h5 class="primaryTitle">Receba seu Box Exclusivo</h5>
            <p>Receba e descubra os sabores Incriveis de acordo com seu perfil de escolha</p>
        </div>
        <div>
            <img src="/images/copoCafe.png" alt="Copo de Café">
            <h5 class="primaryTitle">Os mais diversos sabores</h5>
            <p>Experimente Sabores Incriveis da maneira que desejar! </p>
        </div>

    </div>
    <button class="btnAboutPlans">Experimene Agora</button>
</section>
@endsection

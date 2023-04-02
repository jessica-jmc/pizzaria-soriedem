@extends('master')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://bolichelitoralplaza.com.br/wp-content/uploads/2017/01/pizza.jpg" class="d-block w-100" alt="banner"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Todo dia é dia de pizza</h5>
        <p>Não passe vontade</p>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--imagens das pizzas-->
<div class="d-flex justify-content-center">
    <!--Card 01 -->
    <div class="card" style="width: 18rem; margin: 30px;">
    <img src="https://cache.dominos.com/olo/6.106.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZBU.jpg" class="card-img-top" alt="bauru"/>
    <div class="card-body">
        <p class="card-text">Experimente nossa pizza mais vendida e torne-a sua nova favorita!</p>
    </div>
    </div>

    <!--Card 02 -->
    <div class="card" style="width: 18rem; margin: 30px;">
    <img src="https://cache.dominos.com/olo/6.106.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZPT.jpg" class="card-img-top" alt="portuguesa"/>
    <div class="card-body">
        <p class="card-text">Gosta de sabores diferentes, mas clássicos? Experimente nossa pizza portuguesa, a combinação perfeita de ingredientes</p>
    </div>
    </div>

    <!--Card 03 -->
    <div class="card" style="width: 18rem; margin: 30px;">
    <img src="https://cache.dominos.com/olo/6.106.2/assets/build/market/BR/_pt/images/img/products/larges/F_DOVOMALT.jpg" class="card-img-top" alt="ovomaltine"/>
    <div class="card-body">
        <p class="card-text">Prefere as pizzas doces? Não passe vontade, a realidade mais doce e gostosa do que a expectativa</p>
    </div>
    </div>
</div>

@endsection
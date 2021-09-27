@extends('layouts.layout_home')

@section('content')
<section name="homePrincipal" id="homePrincipal" class="container-fluid">
  <div class="row mt-5 ml-5 mr-5">
    <div class="col-6">
      <strong><h1 class="mb-4">¿Quienes Somos?</h1></strong>
      <p class="text text-justify mr-3">A medida que más personas quieren saber de dónde provienen sus
      alimentos y cómo los cultivan los agricultores, la demanda de
      productos cultivados localmente ha aumentado. Los mercados de
      agricultores ofrecen a los lugareños una forma tradicional de
      encontrar frutas y verduras orgánicas mientras apoyan a las
      empresas y agricultores de su comunidad.
      </p>
      <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none; border-radius: 20px; padding-left: 40px; padding-right: 40px;font-size: 14pt;">{{ __('Leer más') }}</button>
    </div>
    <div class="col-6">
        <div class="row">
          <img src="./img/img3.jpg" alt="homePrincipal" class="imgHP img-fluid mb-5">
        </div>
    </div>
    <hr width=100%  text-align="center"  size=10 color="#8E8E8F">
  </div>
  <div class="row">
    <div class="col-6 mt-5 mb-5 ml-5 mr-5">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/carrusel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/carrusel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/carrusel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
    </div>
    <div class="col mt-5 mb-5 ml-2 mr-5">
        <strong><h1 class="mb-4">Eventos y Especiales</h1></strong>
        <p class="text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates doloremque quis libero nesciunt vitae exercitationem voluptatem fugiat nemo praesentium. Voluptatibus cupiditate quam blanditiis earum eius architecto eveniet amet molestiae delectus!
        </p>
        <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none; border-radius: 20px; padding-left: 40px; padding-right: 40px;font-size: 14pt;">{{ __('Leer más') }}</button>
    </div>
  </div>
  <div class="row mb-5 ml-5 mr-5">
    <hr width=100%  text-align="center"  size=10 color="#8E8E8F">
    <strong><h1 class="text-center mt-5 mb-4">Nuestros Productos</h1></strong>
      <div class="col-lg-4">
        <img src="./img/frutas.jpg" alt="Galeria Imagen" class="imgGaleria img-fluid mb-5">
      </div>
      <div class="col-lg-4">
        <img src="./img/hortalizas.jpg" alt="Galeria Imagen" class="imgGaleria img-fluid mb-5">
      </div>
      <div class="col-lg-4">
        <img src="./img/cereal.jpg" alt="Galeria Imagen" class="imgGaleria img-fluid mb-5">
      </div>
      <div class="col-lg-4">
        <img src="./img/tuberculo.jpg" alt="Galeria Imagen" class="imgGaleria img-fluid mb-5">
      </div>
      <div class="col-lg-4">
        <img src="./img/berenjena.jpg" alt="Galeria Imagen" class="imgGaleria img-fluid mb-5">
      </div>
      <div class="col-lg-4">
        <img src="./img/citrico.jpg" alt="Galeria Imagen" class="imgGaleria img-fluid mb-5">
      </div>
  </div>
</section>

@endsection
@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Contactanos'</li>
  </ol>
  <!-- banner-text -->
  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Telefonos de contacto</h3>

              <div class="mid-info mt-5">
                @for ($i=0; $i < 5; $i++)
                  <h4 class="text-center"><i class="fas fa-phone" aria-hidden></i> +56 9 123123123</h4>
                @endfor
                <br>
              </div>

              <h3 class="tittle text-center mb-lg-5 mb-3">Correos de contacto</h3>

              <div class="mid-info mt-5">
                @for ($i=0; $i < 5; $i++)
                  <h4 class="text-center"><i class="fas fa-at" aria-hidden></i> asd@asd.com</h4>
                @endfor
                <br>
              </div>

              <h3 class="tittle text-center mb-lg-5 mb-3">Ubicación</h3>

              <div class="mid-info mt-5">
                <iframe class="mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.6125652311152!2d-70.14336828569223!3d-20.23341458643461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9152140bbd111c49%3A0x274752c1063473c4!2sUniversidad+de+Tarapac%C3%A1+Sede+Esmeralda!5e0!3m2!1ses-419!2scl!4v1536207178551" width="1000" height="300" frameborder="0" style="border:0"></iframe>
              </div>
              <br>
          </div>
      </div>
  </section>
@endsection

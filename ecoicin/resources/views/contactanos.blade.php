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

    <!-- <h3 class="tittle text-center mb-lg-5 mb-3">.</h3> -->



    <div class="container">
        <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3">Telefonos de contacto
              @auth
                  @if (tipoUsuario() == 2)
                    <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                  @endif
              @endauth
            </h3>

            <div class="mid-info mt-5">
                <h4 class="text-center"><i class="fas fa-phone" aria-hidden></i> 57 2727118</h4>
              <br>
            </div>

            <h3 class="tittle text-center mb-lg-5 mb-3">Correos de contacto
              @auth
                  @if (tipoUsuario() == 2)
                    <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                  @endif
              @endauth
            </h3>

            <div class="mid-info mt-5">
                <h4 class="text-center"><i class="fas fa-at" aria-hidden></i> asd@asd.com</h4>

            </div>

        </div>
    </div>




    <div class="contenedor">

      <form  class="form" method="post" action="{{route('mensajes')}}">
        {{ csrf_field() }}

        <div class="form-header">
          <h1 class="form-title">Contacto</h1>
        </div>

        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-input" name="nombre" id="nombre" placeholder="" value="" required>

        <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-input" name="apellido" id="apellido" placeholder="" value="" required>

        <label for="telefono" class="form-label">Telefono:</label>
        <input type="text" class="form-input" name="telefono" id="telefono" placeholder="" value="" required>


        <label for="correo" class="form-label">Correo:</label>
        <input id="correo" class="form-input" name="email" type="email" placeholder="ejemplo@email.com" required>

        <label for="ocupacion" class="form-label">Ocupacion:</label>
        <select class="form-select" name="ocupacion" id="ocupacion" class="form-label" required>
              <option value="estudiante">Estudiante</option>
              <option value="empresa">Empresa</option>
              <option value="persona">Persona</option>
        </select>


        <label for="mensaje" class="form-label">Mensaje:</label>
        <textarea id="mensaje" class="form-textarea" name="mensaje" placeholder="Danos tu mensaje" required></textarea>


        <input id="submit" class="btn-submit" name="submit" type="submit" value="Enviar">



      </form>

    </div>



<div class="container">

    <br>
    <h3 class="tittle text-center mb-lg-5 mb-3">Ubicación
      @auth
          @if (tipoUsuario() == 2)
            <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
          @endif
      @endauth
    </h3>

    <div class="mid-info mt-5">
      <iframe class="mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.6125652311152!2d-70.14336828569223!3d-20.23341458643461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9152140bbd111c49%3A0x274752c1063473c4!2sUniversidad+de+Tarapac%C3%A1+Sede+Esmeralda!5e0!3m2!1ses-419!2scl!4v1536207178551" width="1000" height="300" frameborder="0" style="border:0"></iframe>
    </div>

    <br><br>

</div>





  </section>
@endsection

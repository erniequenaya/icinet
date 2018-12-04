@extends('layout')

@include('include/header')

@section('main')
  <!-- MIGA DE PAN -->
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Repositorio'</li>
  </ol>

  <!-- CONTENIDO -->
  <section>
      <div class="container">
            @if (isset($mensaje))
              {{$mensaje}}
            @endif

            <!-- TITULO PAGINA -->
            <h1 class="text-center">Productos
              @auth
                  @if (tipoUsuario() == 2)
                    <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                  @endif
              @endauth
            </h1>

            <br>

            <!-- DESCRIPCION PAGINA -->
            <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>

            <div class="container">
              @forelse ($proyectos as $proyecto)
                @if ($cont % 2 == 0)

                  <br>

                  <div class="row">
                @endif

                    <div class="col-md-6 category_grid">
                      <div class="view view3 view-tenth">
                        <div class="category_text_box">
                          <i class="fas fa-users"></i>
                            <h3>{{$proyecto->nombre_proyecto}}</h3>
                              <p>{{$proyecto->autores_proyecto}}</p>
                        </div>

                        <div class="mask">
                          <a href="#">
                            <img src="images/1.jpg" class="img-fluid" alt="">
                          </a>
                        </div>
                      </div>

                      <br>
                    </div>

                @if ($cont % 2 != 0)
                </div>
                @endif

                @php
                  $cont++;
                @endphp

                @empty
                <br>
                <h3 class="tittle text-center mb-lg-5 mb-3">No se han encontrado proyectos aun.</h3>
              @endforelse
            </div>

            <br>
      </div>
  </section>
@endsection

@section('script')

@endsection

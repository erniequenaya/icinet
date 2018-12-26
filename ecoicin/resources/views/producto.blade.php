@extends('layout')

@include('include/header')

@section('main')

<!-- carga del ckeditor-->
@auth
@if (tipoUsuario() == 2)
<script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
@endif
@endauth
<!-- fin carga del ckeditor-->


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
              @auth
                  @if (tipoUsuario() == 2)

                  @endif
              @endauth

<br>

<h3 class="tittle text-center mb-lg-4 mb-3">Productos</h3>

@if (tipoUsuario() == 2)
@auth
    <form action="{{ route('ckeditor/guardar') }}" method="get" id="formProductos">
        <textarea name="productos" id="productos" contenteditable="true" required>
        {{ App\Contenido::where('cont_secc','productos')->value('cont_con') }}
        </textarea>
        <script>
            CKEDITOR.disableAutoInline=true;
            CKEDITOR.inline('productos');
        </script>
    </form>
        <button type="submit" form="formProductos" value="Submit" class="btn celeste-uta text-light d-block mx-auto"><i class="fa fa-edit"></i></button>
@endauth
@else
        {!! App\Contenido::where('cont_secc','productos')->value('cont_con')  !!}
@endif

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

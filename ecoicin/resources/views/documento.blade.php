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

<h3 class="tittle text-center mb-lg-4 mb-3">Documentos</h3>

@if (tipoUsuario() == 2)
@auth
    <form action="{{ route('ckeditor/guardar') }}" method="get" id="formDocumentos">
        <textarea name="documentos" id="documentos" contenteditable="true" required>
        {{ App\Contenido::where('cont_secc','documentos')->value('cont_con') }}
        </textarea>
        <script>
            CKEDITOR.disableAutoInline=true;
            CKEDITOR.inline('documentos');
        </script>
    </form>
        <button type="submit" form="formDocumentos" value="Submit" class="btn celeste-uta text-light d-block mx-auto"><i class="fa fa-edit"></i></button>
@endauth
@else
        {!! App\Contenido::where('cont_secc','documentos')->value('cont_con')  !!}
@endif

            <br>

            <!-- Documentos -->

            <div class="table-responsive">
                  @forelse ($proyectos as $proyecto)
                    @if ($loop->first)
                      <table class="table table-striped text-center data_table">
                        <thead class="bg-primary text-light">
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Autor(es)</th>
                            <th scope="col">Informe</th>
                            <th scope="col">Presentación</th>
                          </tr>
                        </thead>
                        <tbody>
                    @endif

                    <tr>
                      <th scope="row">{{$proyecto->nombre_proyecto}}</th>
                      <td>{{$proyecto->tipo->nombre_tipo_proyecto}}</td>
                      <td>{{$proyecto->autores_proyecto}}</td>
                      <td><a href="/ver_documento/{{$proyecto->informe()}}"><i class="fas fa-file-word" data-toggle="modal"></i></a></td>
                      <td><a href="/ver_documento/{{$proyecto->informe()}}"><i class="fas fa-file-pdf" data-toggle="modal"></i></a></td>
                    </tr>

                    @if ($loop->last)
                      </tbody>
                    </table>
                    @endif
                  @empty
                  <br>
                      <h3 class="tittle text-center mb-lg-5 mb-3">No se han añadido proyectos aun.</h3>
                  @endforelse
            </div>

            <br>
      </div>
  </section>
@endsection

@section('script')

@endsection

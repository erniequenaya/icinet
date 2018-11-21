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
            <h1 class="text-center">Documentos</h1>

            <br>

            <!-- DESCRIPCION PAGINA -->
            <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>

            <br>

            <!-- Documentos -->

            <div class="table-responsive">
                  @forelse ($proyectos as $proyecto)
                    @if ($loop->first)
                      <table class="table table-striped text-center data_table">
                        <thead class="bg-primary text-light">
                          <tr>
                            <th scope="col">Proyecto</th>
                            <th scope="col">Informe</th>
                            <th scope="col">Presentación</th>
                          </tr>
                        </thead>
                        <tbody>
                    @endif

                    <tr>
                      <th scope="row">{{$proyecto->nombre_proyecto}}</th>
                      <td><a href="/ver_documento/{{$proyecto->informe()}}"><i class="fas fa-file-word" data-toggle="modal"></i></a></td>
                      <td><a href="/ver_documento/{{$proyecto->informe()}}"><i class="fas fa-file-pdf" data-toggle="modal"></i></a></td>
                    </tr>

                    @if ($loop->last)
                      </tbody>
                    </table>
                    @endif
                  @empty
                      <h3 class="tittle text-center mb-lg-5 mb-3">No se han añadido proyectos aun.</h3>
                  @endforelse
            </div>

            <br>
      </div>
  </section>
@endsection

@section('script')

@endsection

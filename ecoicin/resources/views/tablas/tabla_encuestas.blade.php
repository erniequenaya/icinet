<div class="table-responsive">
  @forelse ($encuestas as $encuesta)
    @if ($loop->first)
      <table class="table table-striped text-center data_table">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Url</th>
            <th scope="col">Fecha inicio</th>
            <th scope="col">Fecha termino</th>
            <th scope="col">Solo Alumnos</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
    @endif

    <tr>
      <td scope="row">{{$encuesta->nombre_encuesta}}</td>
      <td scope="row"><a target="_blank" href="{{$encuesta->link_encuesta}}">Formulario</a></td>
      <td scope="row">{{$encuesta->fecha_inicio_encuesta}}</td>
      <td scope="row">{{$encuesta->fecha_termino_encuesta}}</td>
      <td scope="row">{{$encuesta->solo_alumnos? 'Si': 'No'}}</td>
      <td scope="row">{{$encuesta->visible? 'Visible': 'Oculta'}}</td>
      <td id="{{$encuesta->id_encuesta}}"><i class="fas fa-pencil-alt modificar"></i> <i class="fas fa-trash" data-toggle="modal" data-target="#"></i></td>
    </tr>

    @if ($loop->last)
        </tbody>
      </table>
    @endif
  @empty
    <h3 class="tittle text-center mb-lg-5 mb-3">No se han añadido encuestas aun.</h3>
  @endforelse

</div>

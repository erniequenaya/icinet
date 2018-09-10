<div class="table-responsive">
  @forelse ($proyectos as $proyecto)
    @if ($loop->first)
      <table class="table table-striped text-center data_table">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">Nombre Proyecto</th>
            <th scope="col">Año</th>
            <th scope="col">Autores</th>
            <th scope="col">Tipo Proyecto</th>
            <th scope="col">Informe</th>
            <th scope="col">Presentacion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
    @endif

    <tr>
      <td scope="row">{{$proyecto->nombre_proyecto}}</td>
      <td>{{$proyecto->fecha_proyecto}}</td>
      <td>{{$proyecto->autores_proyecto}}</td>
      <td>{{$proyecto->tipo->nombre_tipo_proyecto}}</td>
      <td><a target="_blank" href="/ver_documento/{{$proyecto->informe()}}"><i class="fas fa-eye text-dark"></i></a></td>
      <td><a target="_blank" href="/ver_documento/{{$proyecto->presentacion()}}"><i class="fas fa-eye text-dark"></i></a></td>
      <td><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#modificar_proyecto"></i> <i class="fas fa-trash" data-toggle="modal" data-target="#responder_solicitud"></i></td>
    </tr>

    @if ($loop->last)
      </tbody>
    </table>
    @endif
  @empty
    <h3 class="tittle text-center mb-lg-5 mb-3">No se han añadido proyectos aun.</h3>
  @endforelse
</div>

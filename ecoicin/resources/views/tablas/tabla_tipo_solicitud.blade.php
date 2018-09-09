<div class="table-responsive">

  @forelse ($tipo_proyecto as $tipo)
    @if ($loop->first)
      <table class="table table-striped text-center data_table">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">Nombre tipo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
    @endif

    <tr>
      <th scope="row">{{$tipo->nombre_tipo_proyecto}}</th>
      <td><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#modificar_tipo_solicitud"></i> <i class="fas fa-trash" data-toggle="modal" data-target="#"></i></td>
    </tr>

    @if ($loop->last)
      </tbody>
    </table>
    @endif
  @empty
    <h3 class="tittle text-center mb-lg-5 mb-3">No se han añadido areas aun.</h3>
  @endforelse

</div>

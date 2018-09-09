<div class="table-responsive">
      @forelse ($tipo_area_informatica as $tipo_area)
        @if ($loop->first)
          <table class="table table-striped text-center">
            <thead class="bg-primary text-light">
              <tr>
                <th scope="col">Nombre area</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
        @endif

        <tr>
          <th scope="row">{{$tipo_area->nombre_tipo_area_informatica}}</th>
          <td><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#modificar_area_informatica"></i> <i class="fas fa-trash" data-toggle="modal" data-target="#"></i></td>
        </tr>

        @if ($loop->last)
          </tbody>
        </table>
        @endif
      @empty
          <h3 class="tittle text-center mb-lg-5 mb-3">No se han añadido areas aun.</h3>
      @endforelse
</div>

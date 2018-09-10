<div class="table-responsive">
  @forelse ($encuestas as $encuesta)
    @if ($loop->first)
      <table class="table table-striped text-center data_table">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha inicio</th>
            <th scope="col">Fecha termino</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
    @endif

    <tr>
      <td scope="row">{{$encuesta->nombre_encuesta}}</td>
      <td scope="row">{{$encuesta->fecha_inicio_encuesta}}</td>
      <td scope="row">{{$encuesta->fecha_termino_encuesta}}</td>
      <td><i class="fas fa-file-signature modificar" data-toggle="modal" data-target="#responder_encuesta"></i></td> <!-- <a target="_blank" href="{{$encuesta->link_encuesta}}">Formulario</a> -->
    </tr>

    @if ($loop->last)
        </tbody>
      </table>
    @endif
  @empty
    <h3 class="tittle text-center mb-lg-5 mb-3">No se han añadido encuestas aun.</h3>
  @endforelse

</div>

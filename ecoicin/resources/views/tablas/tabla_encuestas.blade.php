<div class="table-responsive">
  <table class="table table-striped text-center data_table">
    <thead class="bg-primary text-light">
      <tr>
        <th scope="col">Nombre encuesta</th>
        <th scope="col">Usuarios</th>
        <th scope="col">Fecha inicio</th>
        <th scope="col">Fecha termino</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @for ($i=0; $i < 2; $i++)
        <tr>
          <th scope="row">Nombre N°1</th>
          <th scope="row">Tipo usuario</th>
          <th scope="row">Fecha</th>
          <th scope="row">Fecha</th>
          <th scope="row">Tipo estado</th>
          <td><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#modificar_encuesta"></i> <i class="fas fa-trash" data-toggle="modal" data-target="#"></i></td>
        </tr>
      @endfor
    </tbody>
  </table>
</div>

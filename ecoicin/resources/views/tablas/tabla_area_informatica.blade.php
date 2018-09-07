<div class="table-responsive">
  <table class="table table-striped text-center">
    <thead class="bg-primary text-light">
      <tr>
        <th scope="col">Nombre area</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @for ($i=0; $i < 2; $i++)
        <tr>
          <th scope="row">Area N°1</th>
          <td><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#modificar_area_informatica"></i> <i class="fas fa-trash" data-toggle="modal" data-target="#"></i></td>
        </tr>
      @endfor
    </tbody>
  </table>
</div>

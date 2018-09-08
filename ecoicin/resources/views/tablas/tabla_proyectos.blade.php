<div class="table-responsive">
  <table class="table table-striped text-center">
    <thead class="bg-primary text-light">
      <tr>
        <th scope="col">Nombre Proyecto</th>
        <th scope="col">Año</th>
        <th scope="col">Autores</th>
        <th scope="col">Area Informatica</th>
        <th scope="col">Documento N°1</th>
        <th scope="col">Documento N°2</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @for ($i=0; $i < 5; $i++)
        <tr>
          <th scope="row">Proyecto N°{{$i}}</th>
          @for ($j=0; $j < 5 ; $j++)
            <td>Mark</td>
          @endfor
          <td><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#modificar_proyecto"></i> <i class="fas fa-trash" data-toggle="modal" data-target="#responder_solicitud"></i></td>
        </tr>
      @endfor
    </tbody>
  </table>
</div>

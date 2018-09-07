<div class="table-responsive">
  <table class="table table-striped text-center">
    <thead class="bg-primary text-light">
      <tr>
        <th scope="col">Rut Empresa</th>
        <th scope="col">Nombre Empresa</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Rubro</th>
        <th scope="col">Area Informatica</th>
        <th scope="col">Tipo Solicitud</th>
        <th scope="col">Estado</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @for ($i=0; $i < 5; $i++)
        <tr>
          <th scope="row">{{$i}}</th>
          @for ($j=0; $j < 8; $j++)
            <td>Mark</td>
          @endfor
          <td><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#completar_solicitud"></i> <i class="fas fa-check" data-toggle="modal" data-target="#responder_solicitud"></i></td>
        </tr>
      @endfor
    </tbody>
  </table>
</div>

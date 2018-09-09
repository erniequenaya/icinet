<div class="table-responsive">
  @forelse ($solicitudes as $solicitud)
    @if ($loop->first)
      <table class="table table-striped text-center data_table">
        <thead class="bg-primary text-light">
          <tr class="align-middle">
            <th scope="col" class="align-middle">Rut Empresa</th>
            <th scope="col" class="align-middle">Nombre Empresa</th>
            <th scope="col" class="align-middle">Telefono</th>
            <th scope="col" class="align-middle">Correo</th>
            <th scope="col" class="align-middle">Rubro</th>
            <th scope="col" class="align-middle">Area Informatica</th>
            <th scope="col" class="align-middle">Tipo Solicitud</th>
            <th scope="col" class="align-middle">Estado</th>
            <th scope="col" class="align-middle">Descripcion</th>
            <th scope="col" class="align-middle">Acciones</th>
          </tr>
        </thead>
        <tbody>
    @endif

    <tr>
      <td scope="col" class="align-middle">{{$solicitud->empresa->rut_empresa}}</td>
      <td scope="col" class="align-middle">{{$solicitud->empresa->nombre_empresa}}</td>
      <td scope="col" class="align-middle">{{$solicitud->empresa->telefono_empresa}}</td>
      <td scope="col" class="align-middle">{{$solicitud->empresa->email_empresa}}</td>
      <td scope="col" class="align-middle">{{$solicitud->empresa->rubro->nombre_rubro}}</td>
      <td scope="col" class="align-middle">{{($solicitud->tipo_area_informatica_id) ? $solicitud->tipo_area->nombre_tipo_area_informatica : 'Sin registro'}}</td>
      <td scope="col" class="align-middle">{{($solicitud->tipo_proyecto_id) ? $solicitud->tipo_proyecto->nombre_tipo_proyecto : 'Sin registro'}}</td>
      <td scope="col" class="align-middle">{{$solicitud->estado->nombre_tipo_estado}}</td>
      <td scope="col" class="align-middle">{{$solicitud->descripcion_solicitud}}</td>
      <td class="align-middle" id="{{$solicitud->id_solicitud}}"><i class="fas fa-pencil-alt completar"></i>&nbsp;&nbsp;<i class="fas fa-check responder"></i></td>
    </tr>


    @if ($loop->last)
        </tbody>
      </table>
    @endif
  @empty
    <h3 class="tittle text-center mb-lg-5 mb-3">No se han añadido solicitudes aun.</h3>
  @endforelse

</div>

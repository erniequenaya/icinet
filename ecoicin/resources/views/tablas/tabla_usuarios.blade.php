<div class="table-responsive">
  @forelse ($usuarios as $usuario)
    @if ($loop->first)
      <table id="tabla_usuarios" class="table table-striped text-center data_table">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">Nombre Completo</th>
            <th scope="col">RUT</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
    @endif

        <tr>
          <th scope="row">{{$usuario->nombre_usuario." ".$usuario->apellido_usuario}}</th>
          <th scope="row">{{$usuario->rut_usuario}}</th>
          <th scope="row">{{$usuario->email_usuario}}</th>
          <th scope="row">{{$usuario->tipo_usuario->nombre_tipo_usuario}}</th>
          <td id="{{$usuario->id}}"><i class="fas fa-pencil-alt modificar_usuario"></i> <i class="fas fa-trash eliminar_usuario"></i></td>
        </tr>

    @if ($loop->last)
      </tbody>
    </table>
    @endif
  @empty

  @endforelse
</div>

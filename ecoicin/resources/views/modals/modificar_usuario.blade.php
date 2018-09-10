<!--/Login-->
<div class="modal fade" id="modificar_usuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Modificiar Usuario</h5>
                    <form action='{{route('modificar.usuario')}}' method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="id_usuario" value="">
                      <fieldset class="form-group">
                        <label>RUT</label>
                        <input type="text" class="form-control" name="rut_usuario" placeholder="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label >Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_usuario" placeholder="">
                      </fieldset>
                      <fieldset class="form-group">
                        <label >Apellido</label>
                        <input type="text" class="form-control" name="apellido_usuario" placeholder="">
                      </fieldset>
                      <fieldset class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email_usuario" placeholder="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label>Tipo usuario</label>
                          <select class="form-control" name="tipo_usuario">
                            @foreach ($tipo_usuario as $tipo)
                              <option value="{{$tipo->id_tipo_usuario}}">{{$tipo->nombre_tipo_usuario}}</option>
                            @endforeach
                          </select>
                      </fieldset>
                      <button type="submit" class="btn btn-primary mx-auto d-block">Modificar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->

<!--/Login-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Iniciar sesión</h5>
                    <form action="{{route('login')}}" method="post" id="form_login">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label class="mb-2">Nombre de usuario: </label>
                            <input name="rut_usuario" type="text" class="form-control" aria-describedby="emailHelp" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Contraseña: </label>
                            <input name="password" type="password" class="form-control" placeholder="" required>
                        </div>
                        <div id="error-rut">
                          <div class="alert alert-danger alert-dismissible fade show">
                            <span class="">No coincide con los registros.</span>
                            <button type="button" class="close">
                              <span id="cerrar-error" aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                        <!--<div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>-->
                          <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Aceptar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
